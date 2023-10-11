<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Dash;
 
Route::get('/', Dash::class);

require __DIR__.'/auth.php';
