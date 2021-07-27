<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CorporateProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\IndexingResultController;
use App\Http\Controllers\MethodologiController;
use App\Http\Controllers\methodologyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

//https force https
URL::forceScheme('https');

Route::get('/', [HomeController::class, 'index']);
Route::get('/methodology', [MethodologiController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/corporateprofile', [CorporateProfileController::class, 'index']);
