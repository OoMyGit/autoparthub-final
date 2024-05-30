<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogListingController extends Controller
{

    public function BlogListing(Request $request)
        {
            return view("blog-listing");
        }
}