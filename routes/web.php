<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/

//ESP routes
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\FondosController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\OpereOnlineController;
use App\Http\Controllers\AbrirCuentaController;
use App\Http\Controllers\RentaGlobalController;
use App\Http\Controllers\RentaFijaArgentinaController;
use App\Http\Controllers\AccionesGlobalesController;
use App\Http\Controllers\RegulacionesController;
use App\Http\Controllers\SeleccionarTipoCuentaController;

Route::get('/', InicioController::class);
Route::get('/acercade', AcercaDeController::class);
Route::get('/servicios', ServiciosController::class);
Route::get('/fondos', FondosController::class);
Route::get('/investigacion', InvestigacionController::class);
Route::get('/opereonline', OpereOnlineController::class);
Route::get('/abrircuenta', AbrirCuentaController::class);
Route::get('/rentaglobal', RentaGlobalController::class);
Route::get('/rentafijaargentina', RentaFijaArgentinaController::class);
Route::get('/accionesglobales', AccionesGlobalesController::class);
Route::get('/regulaciones', RegulacionesController::class);
Route::get('/seleccionartipocuenta', SeleccionarTipoCuentaController::class);

//ENG routes
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpenAccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FoundsController;

Route::get('/home', HomeController::class);
Route::get('/openaccount', OpenAccountController::class);
Route::get('/about', AboutController::class);
Route::get('/founds', FoundsController::class);

//FORM routes
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;

Route::post('/newsletter', NewsletterController::class);
Route::post('/contact', ContactController::class);
