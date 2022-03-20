<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HackerEarthController extends Controller
{
    public function index()
    {
        $hackerearth = Http::get("https://kontests.net/api/v1/hacker_earth");

        return view("hackerearth", [
            "hackerearth"=> json_decode($hackerearth)
        ]);
    }
}
