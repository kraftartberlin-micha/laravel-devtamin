<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

