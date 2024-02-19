<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeySpeaker;
use App\Http\Controllers\linkController;
use App\Http\Controllers\RegisterController;
use App\Models\link;

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
    return view('pages/home');
});
Route::view('/home', 'pages.home');
Route::view('/date', 'pages.date');
Route::view('/inscription', 'pages.inscrit');
Route::get('/key_note', [KeySpeaker::class,'GetSpeaker']);
Route::get('/SocialEvent', [linkController::class,'GetLink']);
Route::post('/inscription',[RegisterController::class,'Store'])->name('inscription');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/socialeLink', [linkController::class, 'show'])->name('Social');
    Route::post('/socialeLink', [linkController::class, 'Addlink'])->name('Sociale.add');
    Route::get('/NoteSpeaker', [KeySpeaker::class, 'show'])->name('speaker');
    Route::post('/NoteSpeaker', [KeySpeaker::class, 'AddKeySpeaker'])->name('speaker.add');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
