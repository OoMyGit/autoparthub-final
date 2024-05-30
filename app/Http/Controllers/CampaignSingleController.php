<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignSingleController extends Controller
{

    public function CampaignSingle(Request $request)
        {
            return view("campaign-single");
        }
}