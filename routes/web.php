<?php

use App\Http\Controllers\JugadorControlador;
use App\Http\Controllers\AmpayerControlador;
use App\Http\Controllers\EquipoControlador;
use App\Http\Controllers\JuegoControlador;
use App\Http\Controllers\LigaControlador;

use App\Http\Controllers\ManejadorControlador;
use App\Http\Controllers\TemporadaControlador;

use App\Models\Ampayer;
use App\Models\Jugador;
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
Route::redirect("/","/inicio");



Route::get('/Resultados', function () {
    return view('Resultados');
});

/** Jugadores routes */
Route::get('/abc/jugadores/create', [JugadorControlador::class,'create']) -> name('jugadoresCreate'); 
Route::post('/abc/jugadores/store', [JugadorControlador::class,'store'])->name("jugadoresStore"); 
Route::get("/abc/jugadores",[JugadorControlador::class,"index"])->name("jugadoresIndex");
Route::get("/abc/jugadores/edit/{id}",[JugadorControlador::class,"edit"])->name("jugadoresEdit");
Route::post("/abc/jugadores/update",[JugadorControlador::class,"update"]) -> name("jugadoresUpdate");

/**juegos */
Route::get('/abc/juegos/create', [JuegoControlador::class,'create']) -> name('juegosCreate'); 
Route::post('/abc/juegos/store', [JuegoControlador::class,'store'])->name("juegosStore"); 
Route::get("/abc/juegos",[JuegoControlador::class,"index"])->name("juegosIndex");
Route::get("/abc/juegos/edit/{id}",[JuegoControlador::class,"edit"])->name("juegosEdit");
Route::post("/abc/juegos/update",[JuegoControlador::class,"update"]) -> name("juegosUpdate");
Route::get("/abc/juegos/details/{id}",[JuegoControlador::class,"details"]) ->name("juegosDetails");

/**Entradas */
Route::get('/abc/Entrada/create', [JuegoControlador::class,'create']) -> name('EntradaCreate'); 
Route::post('/abc/Entrada/store', [JuegoControlador::class,'store'])->name("EntradaStore"); 
Route::get("/abc/Entrada",[JuegoControlador::class,"index"])->name("jugadoresIndex");
Route::get("/abc/Entrada/edit/{id}",[JuegoControlador::class,"edit"])->name("jugadoresEdit");
Route::post("/abc/Entrada/update",[JuegoControlador::class,"update"]) -> name("EntradaUpdate");

/** Ampayers routes */
Route::get('/abc/Ampayers/create', [AmpayerControlador::class,'create']) -> name('AmpayersCreate'); 
Route::post('/abc/Ampayers/store', [AmpayerControlador::class,'store'])->name("AmpayersStore"); 
Route::get("/abc/Ampayers",[AmpayerControlador::class,"index"])->name("AmpayersIndex");
Route::get("/abc/Ampayers/edit/{id}",[AmpayerControlador::class,"edit"])->name("AmpayersEdit");
Route::post("/abc/Ampayers/update",[AmpayerControlador::class,"update"]) -> name("AmpayersUpdate");
Route::get('/inicio', function () {
    return view('/inicio/inicio');
}); 
/**Equipo routes */
Route::get('/abc/equipos/create', [EquipoControlador::class,'create']) -> name('EquiposCreate'); 
Route::post('/abc/equipos/store', [EquipoControlador::class,'store']) -> name('EquiposStore'); 
Route::get('/abc/equipos', [EquipoControlador::class,'index']) -> name('equiposIndex'); 
Route::get('/abc/equipos/edit/{id}', [EquipoControlador::class,'edit']) -> name('EquiposEdit'); 
Route::post('/abc/equipos/update', [EquipoControlador::class,'update']) -> name('equiposUpdate'); 

Route::get('/abc/Temporadas/create', [TemporadaControlador::class,'create']) -> name('TemporadasCreate'); 
Route::post('/abc/Temporadas/store', [TemporadaControlador::class,'store']) -> name('TemporadasStore'); 
Route::get('/abc/Temporadas', [TemporadaControlador::class,'index']) -> name('temporadasIndex'); 
Route::get('/abc/Temporadas/edit/{id}', [TemporadaControlador::class,'edit']) -> name('TemporadasEdit'); 
Route::post('/abc/Temporadas/update', [TemporadaControlador::class,'update']) -> name('TemporadasUpdate'); 

Route::get('/abc/liga/create', [LigaControlador::class,'create']) -> name('ligasCreate'); 
Route::post('/abc/liga/store', [LigaControlador::class,'store']) -> name('ligasStore'); 
Route::get('/abc/liga', [LigaControlador::class,'index']) -> name('ligasIndex'); 
Route::get('/abc/liga/edit/{id}', [LigaControlador::class,'edit']) -> name('ligasEdit'); 
Route::post('/abc/liga/update', [LigaControlador::class,'update']) -> name('ligasUpdate'); 

Route::get('/abc/manejadores/create', [ManejadorControlador::class,'create']) -> name('manejadoresCreate'); 
Route::post('/abc/manejadores/store', [ManejadorControlador::class,'store']) -> name('manejadoresStore'); 
Route::get('/abc/manejadores', [ManejadorControlador::class,'index']) -> name('manejadoresIndex'); 
Route::get('/abc/manejadores/edit/{id}', [ManejadorControlador::class,'edit']) -> name('manejadoresEdit'); 
Route::post('/abc/manejadores/update', [ManejadorControlador::class,'update']) -> name('manejadoresUpdate'); 


?>