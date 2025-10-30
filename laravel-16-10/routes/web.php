<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\propertyControllers;
use App\Http\Controllers\inquiryControllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', [propertyControllers::class, "index"])->middleware('auth');
Route::get('/contact/{propertyId}', [inquiryControllers::class, "create"])->middleware("auth");
Route::post('/contact', [inquiryControllers::class, "store"])->middleware("auth");
Route::get("/ver-imagenes/{imagen}", function ($filename) {

    if (!Storage::exists($filename)) {
        abort(404); // Image not found
    }

    $file = Storage::get($filename);
    $type = Storage::mimeType($filename);

    return response($file, 200)->header('Content-Type', $type);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
