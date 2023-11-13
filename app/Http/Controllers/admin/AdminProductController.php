<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $product_data->product_description = $request->product_description;
        $product_data->product_price = $request->product_price;
        $product_data->product_quantity = $request->product_quantity;
        $product_data->product_status = $request->product_status;
        $product_data->product_category = $request->product_category;

        // If image was not upload
        if (!$request->hasFile('product_image_upload')) {
            return redirect()->route('admin.products.create')->with('message', 'Please upload an image');
        }
        $filename = $this->getImageUpload($request->file('product_image_upload'));

        $product_data->product_image1 = 'images/products/'.$filename;
        $product_data->product_image2 = 'images/products/'.$filename;
        $product_data->product_image3 = 'images/products/'.$filename;
        $product_data->product_image4 = 'images/products/'.$filename;

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

        $upload_ok = false;
        $oldfilename = $product_data->product_image1;

        // If a new file was uploaded, store in database
        if ($request->hasFile('product_image_upload')) {
            $filename = $this->getImageUpload($request->file('product_image_upload'));
            // dd($filename);

            $product_data->product_image1 = 'images/products/'.$filename;
            $product_data->product_image2 = 'images/products/'.$filename;
            $product_data->product_image3 = 'images/products/'.$filename;
            $product_data->product_image4 = 'images/products/'.$filename;

            $upload_ok = true;
        }

        // If new file was uploaded, remove old file
        if ($upload_ok) {
            // Remove old file
            if (Storage::disk('public')->exists($oldfilename)) {
                Storage::disk('public')->delete($oldfilename);
            }
        }

        $product_data->product_title = $request->product_title;
        $product_data->product_description = $request->product_description;
        $product_data->product_price = $request->product_price;
        $product_data->product_quantity = $request->product_quantity;
        $product_data->product_status = $request->product_status;
        $product_data->product_category = $request->product_category;

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
