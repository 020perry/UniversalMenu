<?php

use App\Http\Controllers\MenuController;
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
    return view('welcome');
});
Route::get('/menu', [MenuController::class, 'index']);
// In web.php, niet api.php omdat het een publieke pagina is
Route::get('/menu/{menu}', [MenuController::class, 'show']);
//Route::get('/menu/{menu}', 'MenuController@show')->name('menu.show');
