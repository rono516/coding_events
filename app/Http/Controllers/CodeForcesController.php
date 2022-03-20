<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CodeForcesController extends Controller
{
    public function index()
    {
        $codeforces = Http::get("https://kontests.net/api/v1/codeforces");

        return view("codeforces", [
            "codeforces"=> json_decode($codeforces)

        ])  ;  
    }
}
