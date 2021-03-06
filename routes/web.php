<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\User;
Route: use App\Http\Controllers\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/baru', function () {
    return view('dashboardbaru');
})->middleware(['auth'])->name('baru');

Route::get("/article", [ArticleController::class, 'index'])->middleware(['auth'])->name('article');
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

// Route::get('/confirm-password', function () {
//     return view('auth.confirm-password');
// })->middleware('auth')->name('password.confirm');

Route::post('/confirm-password', function (Request $request) {
    if (! Hash::check($request->password, $request->user()->password)) {
        return back()->withErrors([
            'password' => ['The provided password does not match our records.']
        ]);
    }

    $request->session()->passwordConfirmed();

    return redirect()->intended('settings');
})->middleware(['auth', 'throttle:2,100'])->name('password.confirm');

require __DIR__.'/auth.php';
