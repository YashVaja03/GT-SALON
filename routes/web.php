<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gtcontroller;

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
Route::get('/appointment',function()
{
    return view('appointment');
});

Route::get('/homepage',function()
{
    return view('homepage');
});

Route::get('/aboutus',function()
{
    return view('
    ');
});


Route::get('/admin',function()
{
    return view('admin');
});


Route::get('/services',function()
{
    return view('services');
});



Route::get('/ourbarber', function () {
    return view('ourbarber');
});


Route::get('/', [gtcontroller::class, 'index']);
Route::any('/submit', [gtcontroller::class, 'store']);
Route::any('/admin', [gtcontroller::class, 'view']);
Route::get('/gt/delete/{id}',[gtcontroller::class,'delete'])->name('gt.delete');
Route::get('/gt/edit/{id}',[gtcontroller::class,'edit'])->name('gt.edit');
Route::put('/gt/update/{id}',[gtcontroller::class,'update']);

