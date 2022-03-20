<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HackerRankController extends Controller
{
    public function index()
    {
        $hackerrank = Http::get("https://kontests.net/api/v1/hacker_rank");

        return view("hackerrank", [
            "hackerrank"=> json_decode($hackerrank)
        ]);
    }
}
