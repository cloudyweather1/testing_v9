<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_data = Product::all();

        return view('admin.template_pages_default.admin-view-products',
            compact('product_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.template_pages_default.admin-add-products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product_data = new Product();
        $product_data->product_title = $request->product_title;
        $product_data->product_short_description = $request->product_short_description;
        $product_data->product_full_description = $request->product_full_description;
        $product_data->product_price = $request->product_price;
        $product_data->product_quantity = $request->product_quantity;
        $product_data->product_image_path = 'images/products/';

        if (!$request->hasFile('product_image_upload')) {
            return redirect()->route('admin.products.create')->with('message', 'Please upload an image');
        }
        $filename = $this->getImageUpload($request->file('product_image_upload'));
        $product_data->product_image = $filename;

        $product_data->product_category = $request->product_category;
        $product_data->product_group = $request->product_group;
        $product_data->product_is_active = $request->product_is_active;
        $product_data->save();

        return redirect()->route('admin.products.index')->with('message', 'Product successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::findOrFail($id);

        return view('admin.template_pages_default.admin-edit-products',
            compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product_data = Product::findOrFail($id);
        $product_data->product_title = $request->product_title;
        $product_data->product_short_description = $request->product_short_description;
        $product_data->product_full_description = $request->product_full_description;
        $product_data->product_price = $request->product_price;
        $product_data->product_quantity = $request->product_quantity;
        $product_data->product_image_path = $request->product_image_path;

        $product_data->product_title = $request->product_title;

        $product_data->product_category = $request->product_category;
        $product_data->product_group = $request->product_group;
        $product_data->product_is_active = $request->product_is_active;
        $product_data->save();

        return redirect()->route('admin.products.edit', ['product' => $id])->with('message', 'Product successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Codes not in use
        Product::destroy($id);

        return redirect()->route('admin.products.index')->with('message', 'Product successfully removed');
    }

    public function getImageUpload($file)
    {
        $ext = $file->getClientOriginalExtension();
        $filename = Str::random(4).time().'.'.$ext;
        $newfile = $file->storeAs('', $filename, 'product_images');

        return $filename;
    }
}