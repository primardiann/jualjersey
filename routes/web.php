<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTiketController;


Route::get('/', function () {
    return view('admin');
});

Route::get('/', [ListProdukController::class, 'tampilkan']);

Route::resource('/products', \App\Http\Controllers\ProductController::class);

Route::get('/ticket/{id}', [TicketController::class, 'show'])->name('ticket.show');
Route::post('/ticket/{id}/decrease-stock', [TicketController::class, 'decreaseStock'])->name('ticket.decreaseStock');

Route::get('/admin', [AdminController::class, 'index'])->name('admin_home');

Route::get('/admin/edit-tiket/{id}', [AdminController::class, 'editTiket'])->name('admin.edit_tiket');

Route::put('/admin/tiket/{id}', [AdminTiketController::class, 'update'])->name('admin.update_tiket');

Route::get('/admin/home', 'AdminController@index')->name('admin.home');