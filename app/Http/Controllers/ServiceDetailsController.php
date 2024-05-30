<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{

    public function ServiceDetails(Request $request)
        {
            return view("service-details");
        }
}