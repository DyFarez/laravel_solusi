<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

// Route::get('/member', function () {
//     return view('member');
// })->middleware(['auth', 'verified'])->name('member');

Route::get('/member', [MemberController::class,'index'])->middleware(['auth', 'verified'])->name('member');
Route::get('/member/tambah', [MemberController::class,'add'])->middleware(['auth', 'verified'])->name('tambah-member');
Route::post('/member/store', [MemberController::class,'store'])->middleware(['auth', 'verified'])->name('store');
Route::post('/member/{$id}', [MemberController::class,'index'])->name('delete-member');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
