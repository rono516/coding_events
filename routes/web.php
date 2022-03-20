<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AtCoderController;
use App\Http\Controllers\CodeChefController;
use App\Http\Controllers\LeetCodeController;
use App\Http\Controllers\TopCoderController;
use App\Http\Controllers\KickStartController;
use App\Http\Controllers\CodeForcesController;
use App\Http\Controllers\HackerRankController;
use App\Http\Controllers\HackerEarthController;
use App\Http\Controllers\ContestSitesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [EventsController::class, 'index']);
Route::get('/codeforces', [CodeForcesController::class, 'index']);
Route::get('/topcoder', [TopCoderController::class, 'index']);
Route::get('/atcoder', [AtCoderController::class, 'index']);
Route::get('/codechef', [CodeChefController::class, 'index']);
Route::get('/hackerrank', [HackerRankController::class, 'index']);
Route::get('/hackerearth', [HackerEarthController::class, 'index']);
Route::get('/kickstart', [KickStartController::class, 'index']);
Route::get('/leetcode', [LeetCodeController::class, 'index']);
Route::get('/sites', [ContestSitesController::class, 'index']);
