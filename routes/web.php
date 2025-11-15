<?php

use App\Http\Controllers\ProfileController;
use App\Models\Listing;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $props = [
        'listings' => Listing::with('tags')->get()->sortByDesc('created_at')
    ];
    if (app()->environment('local')) {
        $props['laravelVersion'] = Application::VERSION;
        $props['phpVersion'] = PHP_VERSION;
    }
    return Inertia::render('Welcome', $props);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
