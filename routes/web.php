<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcessoController;

Route::get('/', [AcessoController::class, 'index'])
    ->middleware('permissao');