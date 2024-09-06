<?php

use App\Http\Controllers\InvestorController;
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

Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', function () {
        return view('layout');
    });
    Route::post('/downloadCustomerGuide', [InvestorController::class, 'sendMail']);
});

Route::fallback(function () {
    return redirect('/ar');
});

