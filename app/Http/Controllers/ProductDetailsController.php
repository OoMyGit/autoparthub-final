<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{

    public function ProductDetails(Request $request)
        {
            return view("product-details");
        }
}