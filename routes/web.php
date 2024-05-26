<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ItemController;
use App\Models\UserItem;
use App\Models\UserVenue;

Route::get('/', function () {
    return view('welcome');
});

//works
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/nav', function () {
    return view('navTest');
});

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware('auth')->can(('view-bakcend'));

//ivy
Route::get('/currentRental', function (){
    return view('/user/currentRental', [
        'userItems' => UserItem::all(),
        'userVenues' => UserVenue::all()
    ]);
});

Route::get('/account/info',[RegisteredUserController::class,'index'])->middleware('auth');
Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);



Route::get('/login',[SessionController::class,'create'])->name('login');
Route::get('/logout',[SessionController::class,'destroy']);
Route::post('/login',[SessionController::class,'store']);


Route::get('/item',[ItemController::class,'index'])->middleware('auth');
Route::get('/account/item',[ItemController::class,'account_index'])->middleware('auth');
