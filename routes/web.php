<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProgramController;
 use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\Auth\DoctorAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DoctorController;

use App\Http\Controllers\APIKeyController;

// Show the API key view
Route::get('/generate-api-key', [APIKeyController::class, 'showKey'])->name('api.key');

// Generate a new API key (POST request)
Route::post('/generate-api-key', [APIKeyController::class, 'generate'])->name('generate.api.key');



Route::resource('doctors', DoctorController::class);


Route::get('/', [LandingPageController::class, 'index']);




// Doctor Auth
Route::get('doctor/login', [DoctorAuthController::class, 'showLogin'])->name('doctor.login');
Route::post('doctor/login', [DoctorAuthController::class, 'login'])->name('doctor.login.submit');
Route::post('doctor/logout', [DoctorAuthController::class, 'logout'])->name('doctor.logout');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::resource('clients', ClientController::class);
    Route::resource('programs', ProgramController::class);
        Route::resource('enrollments', EnrollmentController::class);



Route::get('enrollments/{id}', [EnrollmentController::class, 'show'])->name('enrollments.show');


    Route::post('clients/{client}/enroll', [ClientController::class, 'enroll'])->name('clients.enroll');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
