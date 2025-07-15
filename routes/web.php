<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', \App\Livewire\Admin\Auth\Login::class)->name('login');
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

    Route::get('/', \App\Livewire\Admin\Dashboard\Index::class)->name('dashboard');
});
