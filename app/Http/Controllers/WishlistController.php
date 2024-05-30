<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function Wishlist(Request $request)
        {
            return view("wishlist");
        }
}