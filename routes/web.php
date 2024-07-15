<?php

use Illuminate\Support\Facades\Route;
use Monosniper\LaravelTranslate\Livewire\Translate;

Route::get('translate', Translate::class);
Route::get('/', Translate::class)->domain('translate.'.config('app.url'));
