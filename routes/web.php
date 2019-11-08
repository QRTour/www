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


Route::get('qrcode', function () {
     return QrCode::size(300)->generate('A basic example of QR code!');
});



Route::get('qrcode-url', function () {
     return QrCode::errorCorrection('M')->size(5000)->generate('https://qrtour.com/link/1234567890');
});
