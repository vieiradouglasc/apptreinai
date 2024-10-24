<?php

use App\Http\Controllers\BodyPartListController;
use App\Http\Controllers\EquipmentListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TargetListController;
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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Target List
Route::get('targetlists', [TargetListController::class, 'index'])->name('targetlist.index');


//Equipment List
Route::get('equipmentlists', [EquipmentListController::class,'index'])->name('equipmentlist.index');


// Body Part List
Route::get('bodypartlists', [BodyPartListController::class, 'index'])->name('bodypartlist.index');
