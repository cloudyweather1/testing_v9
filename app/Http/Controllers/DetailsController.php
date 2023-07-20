<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DetailsController extends Controller
{
    public function index($id)
    {
        $product_details = Product::find($id);

        return view('template0_pages/detailspage', [
            'data' => $product_details,
        ]);
    }
}
