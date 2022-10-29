<?php

use App\Http\Controllers\ScraperController;
use Illuminate\Support\Facades\Route;

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
//https://www.youtube.com/watch?v=IVXG9gj6R6E&t=22s&ab_channel=CodeForYou

Route::get('/', function () {
    return view('welcome');
});

Route::get('scraper', [ScraperController::class, 'scraper'])->name('scraper');
