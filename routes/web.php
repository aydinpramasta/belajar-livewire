<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', \App\Livewire\Login::class)
    ->middleware('guest')
    ->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');

    Route::get('/users', \App\Livewire\Users\Index::class)->name('users.index');
    Route::get('/users/{user}', \App\Livewire\Users\Show::class)->name('users.show');

    Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
});
