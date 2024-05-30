<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignsController extends Controller
{

    public function Campaigns(Request $request)
        {
            return view("campaigns");
        }
}