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

    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('/', \App\Livewire\Admin\Page\Index::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Page\Create::class)->name('create');
    });
});
