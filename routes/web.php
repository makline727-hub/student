<?php
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('home',[Homecontroller::class,'home'] );
Route::get('About',[Homecontroller::class,'About'] );
Route::get('Contact', [Homecontroller::class, 'Contact']);