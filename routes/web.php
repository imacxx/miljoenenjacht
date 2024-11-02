<?php

use App\Livewire\Miljoenenjacht;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miljoenenjacht', Miljoenenjacht::class);
