<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContestSitesController extends Controller
{
    public function index()
    {
        // $contsites = Http::get("https://kontests.net/api/v1/sites");

        // return view("contsites", [
        //     "contsites"=> json_decode($contsites)
        // ]);
        return view("sites");
    }
}
