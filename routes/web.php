<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/

//ESP routes
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\IniciarSesionController;
use App\Http\Controllers\RentaGlobalController;
use App\Http\Controllers\AccionesGlobalesController;
use App\Http\Controllers\RentaFijaArgentinaController;
use App\Http\Controllers\RegulacionesController;
use App\Http\Controllers\SeleccionarTipoCuentaController;
use App\Http\Controllers\EspController;
Route::get('/', DefaultController::class);
Route::get('/inicio', InicioController::class);
Route::get('/nosotros', NosotrosController::class);
Route::get('/servicios', ServiciosController::class);
Route::get('/investigacion', InvestigacionController::class);
Route::get('/iniciarsesion', IniciarSesionController::class);
Route::get('/rentaglobal', RentaGlobalController::class);
Route::get('/accionesglobales', AccionesGlobalesController::class);
Route::get('/rentafijaargentina', RentaFijaArgentinaController::class);
Route::get('/regulaciones', RegulacionesController::class);
Route::get('/seleccionartipocuenta', SeleccionarTipoCuentaController::class);
Route::get('/esp', EspController::class);

//ENG routes
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\RegulationsController;
use App\Http\Controllers\GlobalRentController;
use App\Http\Controllers\GlobalActionController;
use App\Http\Controllers\FixedRentArgentinaController;
use App\Http\Controllers\SelectAccountTypeController;
use App\Http\Controllers\EngController;
Route::get('/home', HomeController::class);
Route::get('/aboutus', AboutUsController::class);
Route::get('/services', ServicesController::class);
Route::get('/research', ResearchController::class);
Route::get('/login', LogInController::class);
Route::get('/regulations', RegulationsController::class);
Route::get('/globalrent', GlobalRentController::class);
Route::get('/globalaction', GlobalActionController::class);
Route::get('/fixedrentargentina', FixedRentArgentinaController::class);
Route::get('/selectaccounttype', SelectAccountTypeController::class);
Route::get('/eng', EngController::class);

//FORM routes
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
Route::post('/newsletter', NewsletterController::class);
Route::post('/contact', ContactController::class);
