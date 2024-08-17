<?php

use App\Http\Controllers\Admin\CalonController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\CategorycalonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Sipil\RegcalonController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['admin'])->group(function () {
    // Route::get('', [DashboardController::class, 'admin']);
   Route::get('dashboard-admin',[AdminDashboardController::class,'index']);
   Route::get('calon',[CalonController::class,'calon']);
   Route::post('upd',[CalonController::class,'upd']);

   Route::get('registercalon',[CalonController::class,'category']);


});

Route::middleware(['sipil'])->group(function () {

    Route::get("dashboard-sipil",[DashboardController::class,'sipil']);
    Route::get("regcalon",[RegcalonController::class,'regcalon']);
    Route::post("reg",[RegcalonController::class,'datac']);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
