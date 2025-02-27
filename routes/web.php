<?php

use App\Http\Controllers\loginPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(loginPage::class)->group(function (){
    Route::get("/login", [loginPage::class, "login"]);
    Route::post("/submitLogin", [loginPage::class, "submitLogin"]);
});
Route::get("/", [\App\Http\Controllers\homeController::class, "index"]);
