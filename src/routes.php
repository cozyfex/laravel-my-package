<?php

use Illuminate\Support\Facades\Route;

use CozyFex\MyPackage\Controllers\ExistSessionController;
use CozyFex\MyPackage\Controllers\NoneSessionController;

Route::middleware(['web', 'auth'])->resource('exist', ExistSessionController::class);
Route::middleware(['web'])->resource('none', NoneSessionController::class);
