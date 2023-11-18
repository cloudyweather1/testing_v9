<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class AdminDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discount_data = Discount::all();

        return view('admin.template_pages_default.admin-view-discounts', compact('discount_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discount_data = Discount::all();

        return view('admin.template_pages_default.admin-create-discounts', compact('discount_data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Discount();
        $data->discount_title = $request->discount_title;
        $data->discount_percent = $request->discount_percent;
        $data->save();

        return redirect()->route('admin.discounts.index')->with('message', 'Discount Created');
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
        $data = Discount::findOrFail($id);

        return view('admin.template_pages_default.admin-edit-discounts', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Discount::findOrFail($id);
        $data->discount_title = $request->discount_title;
        $data->discount_percent = $request->discount_percent;
        $data->save();

        return redirect()->route('admin.discounts.edit', ['discount' => $id])->with('message', 'Discount successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Discount::destroy($id);

        return redirect()->route('admin.discounts.index')->with('message', 'Discount Created');
    }
}
