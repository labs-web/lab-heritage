<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Membre\MembreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MembreController::class, 'index'])->name('membre.index');
Route::get('/membre/form-ajouter',[MembreController::class, 'create'])->name('membre.create');
Route::post('/membre/ajouter',[MembreController::class, 'store'])->name('membre.store');
Route::get('/membre/{id}',[MembreController::class, 'show'])->name('membre.show');
Route::get('/membre/{id}/edit',[MembreController::class, 'edit'])->name('membre.edit');
Route::PATCH('/membre/{id}/update',[MembreController::class, 'update'])->name('membre.update');
Route::post('/membre/{id}/delete',[MembreController::class, 'delete'])->name('membre.delete');