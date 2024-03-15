<?php


use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\CompanyPanel\CompanyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CandidateController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:company'])->group(function () {
    Route::get('/company/dashboard', [CompanyController::class, 'index'])->name('company.dashboard');
    Route::get('/company/job-post', [CompanyController::class, 'createJob'])->name('company.jobpost');
    Route::post('/company/job-post/store', [CompanyController::class, 'storeJob'])->name('company.jobpost.store');

});



Route::view('/about', 'candidate.pages.about');
Route::view('/contact', 'candidate.pages.contact');


// Route::view('/jobPost','company.jobpost');



