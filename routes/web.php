<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard.dashboard');
// })->name('dashboard');


Route::get('/', function () {
    return view('dashboard.dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

// Route::get('doctor/{id}/edit',[DoctorController::class,'edit']);

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth','admin']],function () {
    Route::resource('doctor', DoctorController::class);
    Route::resource('time', TimeController::class);

});
// Route::middleware(['auth', 'second'])->group(function () {

// });





// Route::get('/test', function () {
//     return view('dashboard.test');
// });
