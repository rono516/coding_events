<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CodeChefController extends Controller
{
    public function index()
    {
        $codechef = Http::get("https://kontests.net/api/v1/code_chef");

        return view("codechef", [
            "codechef"=> json_decode($codechef)
        ]);
    }
}
