<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ContactsController;

use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AdminController;
use App\Models\AboutUs;
use App\Models\Contacts;
use App\Models\News;
use App\Models\Services;
use App\Models\Sliders;
use App\Models\Teams;
use App\Models\User;

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
    $sliders = Sliders::all();
    $teams = Teams::paginate(6);
    return view('welcome', compact('sliders', 'teams'));
});

// About Us routes
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

// Services routes
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');

// News routes
Route::get('/blogs', [NewsController::class, 'index'])->name('blogs');
Route::get('/blogs/{blog}', [NewsController::class, 'show'])->name('blogs.show');

// Teams routes
Route::get('/teams', [TeamsController::class, 'index'])->name('teams');

// Contacts routes
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::post('/contacts', [ContactsController::class, 'send'])->name('contacts.send');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes with admin middleware
Route::middleware(['auth', 'role:admin,superadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('teams', App\Http\Controllers\Admin\TeamsController::class);
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
    Route::resource('sliders', App\Http\Controllers\Admin\SlidersController::class);
    Route::resource('contacts', App\Http\Controllers\Admin\ContactsController::class);
    Route::resource('aboutus', App\Http\Controllers\Admin\AboutUsController::class);
});

require __DIR__.'/auth.php';
