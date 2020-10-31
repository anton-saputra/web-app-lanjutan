<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about-me", function () {
    return "Nama Saya <b>Anton Saputra</b>";
});

Route::get("/contact", function () {
    return "Email : saputraanton490@gmail.com";
});

route::get("/populer", function () {
    return "Saat ini yang populer adalah covid-19";
});

route::get("/film", function () {
    return "Film parasite merupakan film yang sangat bagus sekali";
});

route::get("/makanan", function () {
    return "Makanan sehat yang bagus di konsumsi selama pandemi yaitu buah-buahan";
});

route::get("/minuman", function () {
    return "Minuman yang bagus untuk meningkatkan imunintas tubuh yaitu jus tomat";
});

use App\Http\Controllers\UtamaController;
Route::get("/utama/test", [UtamaController::class, "test"]);

use App\Http\Controllers\SatuController;
Route::get("/utama/method-1", [SatuController::class, "method1"]);

Route::get("/utama/method-2", [SatuController::class, "method2"]);

Route::get("/utama/method-3", [SatuController::class, "method3"]);

use App\Http\Controllers\DuaController;
Route::get("/utama/method1", [DuaController::class, "method1"]);

Route::get("/utama/method2", [DuaController::class, "method2"]);

Route::get("/utama/method3", [DuaController::class, "method3"]);


