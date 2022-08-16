<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\tets;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [UserAuthController::class, 'register']);
Route::post('/login', [UserAuthController::class, 'login']);


 //Route::get('admin/home', [HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');

// //Route::get('/', [HomeController::class, 'test']);
// Route::get('/test', [HomeController::class, 'test']);
// // route::get('/index', 'tets@index');
