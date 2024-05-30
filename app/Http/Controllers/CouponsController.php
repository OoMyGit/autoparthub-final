<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponsController extends Controller
{

    public function Coupons(Request $request)
        {
            return view("coupons");
        }
}