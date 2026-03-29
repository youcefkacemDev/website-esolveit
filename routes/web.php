<?php

use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;


// Route::livewire('/', 'pages.home');
Route::get('/', Home::class);
