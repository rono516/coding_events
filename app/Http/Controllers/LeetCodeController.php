<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeetCodeController extends Controller
{
    public function index()
    {
        $leetcode = Http::get("https://kontests.net/api/v1/leet_code");

        return view("leetcode", [
            "leetcode"=> json_decode($leetcode)
        ]);
    }
}
