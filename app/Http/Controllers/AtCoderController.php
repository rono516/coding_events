<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AtCoderController extends Controller
{
    public function index()
    {
        $atcoder = Http::get("https://kontests.net/api/v1/at_coder");

        return view("atcoder", [
            "atcoder"=> json_decode($atcoder)
        ]);
    }
}
