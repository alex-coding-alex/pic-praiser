<?php

use App\Livewire\Frontpage\Base;
use App\Livewire\Posts\PostUpload;
use App\Livewire\Posts\PostView;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/base', Base::class)->name('base');

Route::middleware(['auth'])->group(function () {
    Route::get('/posts/create', PostUpload::class)->name('posts.create');
    Route::get('/posts/{post}', PostView::class)->name('posts.view');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
