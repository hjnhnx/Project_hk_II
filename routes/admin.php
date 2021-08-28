<?php


use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return view('admin.layouts.table');
});
Route::get('/2',function (){
    return view('admin.layouts.form');
});
