<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PontoColetaController;
use App\Http\Controllers\ProfileController;
use App\Models\Empresa;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

 Route::post('/add-empresa', [EmpresaController::class, 'store']);
 Route::get('/editar-empresa/{id}', [EmpresaController::class, 'edit']);
 Route::patch('/update-empresa/{id}', [EmpresaController::class, 'update'])->name('empresa.edit');
 Route::delete('/apagar-empresa/{id}', [EmpresaController::class, 'destroy']);

 Route::post('/add-pontocoleta', [PontoColetaController::class, 'store']);
 Route::get('/editar-pontocoleta/{id}', [PontoColetaController::class, 'edit']);
 Route::patch('/update-pontocoleta/{id}', [PontoColetaController::class, 'update'])->name('pontocoleta.edit');
 Route::delete('/apagar-pontocoleta/{id}', [PontoColetaController::class, 'destroy']);

//Route::post('/add-empresa', [EmpresaController::class, 'store'])->name('profile.store');
//Route::get('/editar-empresa', [EmpresaController::class, 'edit'])->name('profile.edit');
//Route::patch('/update-empresa', [EmpresaController::class, 'update']);//->name('profile.update');
//Route::delete('/apagar-empresa', [EmpresaController::class, 'destroy']);//->name('profile.destroy');

//  Route::middleware('auth')->group(function () {
//      Route::get('/add-empresa', [EmpresaController::class, 'edit'])->name('profile.store');
//     Route::get('/editar-empresa', [EmpresaController::class, 'edit'])->name('profile.edit');
//     Route::patch('/update-empresa', [EmpresaController::class, 'update'])->name('profile.update');
//      Route::delete('/apagar-empresa', [EmpresaController::class, 'destroy'])->name('profile.destroy'); 
//  });


require __DIR__.'/auth.php';
