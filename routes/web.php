<?php


use App\Http\Controllers\DragonController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Element;

Route::get('/', function () {
    return view('layouts.plantilla');
});

Route::get('/dragones',[DragonController::class, 'index'])->name('dragones.index');

Route::get('/dragones/create', [DragonController::class, 'create'])->name('dragones.create');

Route::get('/dragones/{dragon}',[DragonController::class, 'show','{dragon}'])->name('dragones.show');

Route::get('/dragones/{dragon}/edit', [DragonController::class, 'edit', '{dragon}'])->name('dragones.edit');
