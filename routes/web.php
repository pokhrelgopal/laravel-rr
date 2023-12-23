<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TypeController;
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

Route::get('book/create', [BookController::class, 'create'])->name('book.create');
Route::get('author/create', [AuthorController::class, 'create'])->name('author.create');
Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
Route::get('type/create', [TypeController::class, 'create'])->name('type.create');
Route::get('borrow/create', [BorrowController::class, 'create'])->name('borrow.create');


Route::post('book', [BookController::class, 'store'])->name('book.store');
Route::post('author', [AuthorController::class, 'store'])->name('author.store');
Route::post('student', [StudentController::class, 'store'])->name('student.store');
Route::post('type', [TypeController::class, 'store'])->name('type.store');
Route::post('borrow', [BorrowController::class, 'store'])->name('borrow.store');

Route::get('book/index', [BookController::class, 'index'])->name('book.index');
Route::get('book/{bookId}', [BookController::class, 'show'])->name('book.show');
Route::delete('book/{bookId}', [BookController::class, 'destroy'])->name('book.destroy');

Route::get('book/{bookId}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::put('book/{bookId}', [BookController::class, 'update'])->name('book.update');
