<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreateCustomer;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/create', CreateCustomer::class);