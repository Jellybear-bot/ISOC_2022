<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/NKT_form', function () {
    return view('CRG/NKT_form');
});

Route::get('/master', function () {
    return view('layout_master/master');
});

// form page
Route::get('/CRG/NKT_form', [FormController::class, 'NKT_form'])->name('CRG.NKT_form');
Route::get('/pages/profile/form', [FormController::class, 'form'])->name('form');
