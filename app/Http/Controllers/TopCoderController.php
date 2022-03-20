<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TopCoderController extends Controller
{
    public function index()
    {
        $topcoder = Http::get("https://kontests.net/api/v1/top_coder");

       return view("topcoder", [
        "topcoder"=> json_decode($topcoder)
    ]);
        
    }
    
}
