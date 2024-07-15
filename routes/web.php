<?php

use Illuminate\Support\Facades\Route;
use \App\Livewire\Translate;

Route::get('translate', Translate::class);
Route::get('/', Translate::class)->domain('translate.'.config('app.url'));
