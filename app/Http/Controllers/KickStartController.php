<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KickStartController extends Controller
{
    public function index()
    {
        $kickstart = Http::get("https://kontests.net/api/v1/kick_start");

        return view("kickstart", [
            "kickstart"=> json_decode($kickstart)
        ]);
    }
}
