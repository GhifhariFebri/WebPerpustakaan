<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLibrarian;
use App\Models\Buku;
use App\Models\Kategori;
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
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/home', function () {
    return view('members.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

#routing Members
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('members.dashboard');
    })->middleware(['auth', 'verified'])->name('membersdashboard');
    Route::get('/perpustakaan', [BukuController::class, 'indexmember'])->name('buku.members');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjamanstore.members');
    Route::get('/pengembalian', [BukuController::class, 'indexpinjammember'])->name('pengembalian.members');
    Route::put('/pengembalian/update/{id}', [PeminjamanController::class, 'update'])->name('pengembalianupdate.members');
});

#only librarian routing
Route::middleware(['auth', CheckLibrarian::class])->group(function () {
    Route::get('/librarian/dashboard', function () {
        return view('librarian.dashboard');
    })->middleware(['auth', 'verified'])->name('librariandashboard');
    Route::get('/librarian/user', [UserController::class, 'index'])->name('user.librarian');
    Route::post('/librarian/user/store', [UserController::class, 'store'])->name('storeuser.librarian');
    Route::put('/librarian/user/edit/{id}', [UserController::class, 'update'])->name('edituser.librarian');
    Route::delete('/librarian/user/delete/{id}', [UserController::class, 'destroy'])->name('deleteuser.librarian');
    Route::get('/librarian/kategori', [KategoriController::class, 'index'])->name('kategori.librarian');
    Route::post('/librarian/kategori/store', [KategoriController::class, 'store'])->name('storekategori.librarian');
    Route::put('/librarian/kategori/edit/{id}', [KategoriController::class, 'update'])->name('editkategori.librarian');
    Route::delete('/librarian/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('deletekategori.librarian');
    Route::get('/librarian/buku', [BukuController::class, 'index'])->name('buku.librarian');
    Route::post('/librarian/buku/store', [BukuController::class, 'store'])->name('storebuku.librarian');
    Route::put('/librarian/buku/edit/{id}', [BukuController::class, 'update'])->name('editbuku.librarian');
    Route::delete('/librarian/buku/delete/{id}', [BukuController::class, 'destroy'])->name('deletebuku.librarian');
    Route::get('/librarian/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.librarian');
});

#profile routing
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    });
require __DIR__.'/auth.php';
