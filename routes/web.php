<?php

use Illuminate\Support\Facades\Route;

// Landing page
Route::view('/', 'landing');

// Vue registration app
Route::view('/register', 'welcome');