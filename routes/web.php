<?php
use App\Http\Controllers\contact;
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

Route::get('/', function () {
    return view('welcome');
});
/*act*/
Route::get('/Act_ind', function () {
    return view('Act_ind');
});
Route::get('/conseil', function () {
    return view('conseil');
});
Route::get('/Act_aut', function () {
    return view('Act_aut');
});
/*produit VAL*/
Route::get('produit/val/2T', function () {
    return view('produit/val/2T');
});
Route::get('produit/val/DCT', function () {
    return view('produit/val/DCT');
});
Route::get('produit/val/DEX', function () {
    return view('produit/val/DEX');
});

Route::get('produit/val/CVT', function () {
    return view('produit/val/CVT');
});

Route::get('produit/val/ALL/5W30', function () {
    return view('produit/val/ALL/5W30');
});
Route::get('produit/val/ALL/5W40', function () {
    return view('produit/val/ALL/5W40');
});
Route::get('produit/val/ALL/10W40', function () {
    return view('produit/val/ALL/10W40');
});

Route::get('produit/val/ALL/15W40', function () {
    return view('produit/val/ALL/15W40');
});

Route::get('produit/val/ALL/ALL2T', function () {
    return view('produit/val/ALL/ALL2T');
});
Route::get('produit/val/gear/75W80', function () {
    return view('produit/val/gear/75W80');
});
Route::get('produit/val/gear/75W90', function () {
    return view('produit/val/gear/75W90');
});

Route::get('produit/val/gear/80W90', function () {
    return view('produit/val/gear/80W90');
});

Route::get('produit/val/syn/0W20', function () {
    return view('produit/val/syn/0W20');
});
Route::get('produit/val/syn/0W30', function () {
    return view('produit/val/syn/0W30');
});
Route::get('produit/val/syn/5W20', function () {
    return view('produit/val/syn/5W20');
});

Route::get('produit/val/syn/5W30', function () {
    return view('produit/val/syn/5W30');
});

Route::get('produit/val/syn/5W40', function () {
    return view('produit/val/syn/5W40');
});

/*produit AFRILUB*/
Route::get('produit/afri/10W40', function () {
    return view('produit/afri/10W40');
});
Route::get('produit/afri/15W40', function () {
    return view('produit/afri/15W40');
});

Route::get('produit/afri/20W50', function () {
    return view('produit/afri/20W50');
});

Route::get('produit/afri/ATF', function () {
    return view('produit/afri/ATF');
});

Route::get('produit/afri/75W80', function () {
    return view('produit/afri/75W80');
});

Route::get('produit/afri/75W90', function () {
    return view('produit/afri/75W90');
});

Route::get('produit/afri/85W140', function () {
    return view('produit/afri/85W140');
});

Route::get('produit/afri/80W90', function () {
    return view('produit/afri/80W90');
});
/*test*/
/*produit HM*/
Route::get('produit/HM/4T_20w50_1L', function () {
    return view('produit/HM/4T_20w50_1L');
});
Route::get('produit/HM/15w40_1L', function () {
    return view('produit/HM/15w40_1L');
});
Route::get('produit/HM/20w50_1L', function () {
    return view('produit/HM/20w50_1L');
});
Route::get('produit/HM/SAE10w40_1L', function () {
    return view('produit/HM/SAE10w40_1L');
});
Route::get('produit/HM/SAE10w40_5L', function () {
    return view('produit/HM/SAE10w40_5L');
});
Route::get('produit/HM/SAE15w40_5L', function () {
    return view('produit/HM/SAE15w40_5L');
});
Route::get('produit/HM/SAE20w50_1L', function () {
    return view('produit/HM/SAE20w50_1L');
});
Route::get('produit/HM/SAE20w50_4L', function () {
    return view('produit/HM/SAE20w50_4L');
});



Route::get('/produit/afrilub', function () {
    return view('/produit/afrilub');
});

Route::get('/produit/valvoline', function () {
    return view('/produit/valvoline');
});

Route::get('/produit/cimcool', function () {
    return view('/produit/cimcool');
});

Route::get('/produit/castrol', function () {
    return view('/produit/castrol');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::Post('send',[contact::class,'send']);