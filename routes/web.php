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
     echo '<img src="data:image/png;base64, '.base64_encode(QrCode::format('png')->errorCorrection('H')->merge('/resources/imgs/logo-trans.png', .2)->size(2000)->generate('https://qrt.to/b')). '" />';
//     echo '<img src="data:image/png;base64, '.base64_encode(QrCode::format('png')->errorCorrection('H')->merge('/resources/imgs/logo.png', .243)->size(2000)->generate('https://qrt.to/b')). '" />';
//     echo '<img src="data:image/png;base64, '.base64_encode(QrCode::format('png')->errorCorrection('H')->merge('/resources/imgs/logo2.png', .243)->size(2000)->generate('https://qrt.to/bY8')). '" />';
//      return QrCode::size(500)->generate('https://qrt.to/bY8');
});
