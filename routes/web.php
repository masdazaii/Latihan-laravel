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
	//cara menampilkan string dan memanggil fungsi date
    echo "hello word now : ".date("Y/m/d")."<br>";
    echo date("M");
    //return view('welcome');
});
