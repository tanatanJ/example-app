<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::resource('title', C_titles::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('my-controller', [MyController::class,'index']);
Route::get('/my-route',function(){
    return view('myroute');
});
Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('multable', $data);
});
