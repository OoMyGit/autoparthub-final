<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopGrid2Controller extends Controller
{

    public function ShopGrid2(Request $request)
        {
            return view("shop-grid-2");
        }
}