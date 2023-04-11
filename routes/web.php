<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControllerpdf;
use App\Exports\UsersExportxlsx;
use App\Exports\UsersExportpdf;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();




//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/Export', [App\Http\Controllers\UserController::class, 'ExportAllpdfUsers'])->name('users.pdf');
Route::get('/users/Export', [App\Http\Controllers\UserController::class, 'ExportAllxlsxUsers'])->name('users.xlsx');

//Route::name('registro')->get('registro', [UsuarioController::class, 'registro']);
//Route::name('js_municipios')->get('js_municipios', [UsuarioController::class, 'js_municipios']);

Route::resource('inputs', UsuarioController::class); 
Route::name('registro')->get('campos', [UsuarioController::class, 'campos']);

Route::get('estados', [App\Http\Controllers\UsuarioController::class, 'getEstados'])->name('estados');
Route::get('municipios', [App\Http\Controllers\UsuarioController::class, 'getMunicipios'])->name('municipios');



