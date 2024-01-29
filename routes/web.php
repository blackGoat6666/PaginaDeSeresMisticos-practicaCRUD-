<?php


use App\Http\Controllers\DragonController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Element;

Route::get('/', function () {
    return view('layouts.plantilla');
});

Route::get('/dragones',[DragonController::class, 'index'])->name('dragones.index');

Route::get('/dragones/create', [DragonController::class, 'create'])->name('dragones.create');

Route::post('/dragones/{dragon}', [DragonController::class, 'store'])->name('cursos.store');

Route::get('/dragones/{dragon}',[DragonController::class, 'show','{dragon}'])->name('dragones.show');

Route::get('/dragones/{dragon}/edit', [DragonController::class, 'edit', '{dragon}'])->name('dragones.edit');

Route::put('/cursos/{dragon}', [DragonController::class, 'update'])->name('dragones.update');

Route::delete('/cursos/{dragon}', [DragonController::class, 'destroy'])->name('dragones.destroy');


