<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopGridController extends Controller
{

    public function ShopGrid(Request $request)
        {
            return view("shop-grid");
        }
}