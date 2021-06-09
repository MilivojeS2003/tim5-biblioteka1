<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PismoController;
use App\Http\Controllers\PovezController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\IzdavacController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\KorisnikController;
use App\Http\Controllers\BibliotekarController;
use App\Http\Controllers\TipkorisnikaController;
use App\Http\Controllers\UcenikController;
use App\Http\Controllers\KnjigaController;
use App\Http\Controllers\ZanrController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\PolisaController;
use App\Http\Controllers\DashboardController;
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

// Dodajemo middleware za odredjivanje vidljivosti ruta
Route::middleware(['auth'])->group(function(){

    Route::get("/",[DashboardController::class,'aktivnosti'])->name('dashboard');
    Route::get('aktivnosti/{knjiga}',[DashboardController::class,'aktivnosti_knjiga'])->name('dashboard.aktivnosti');
    //Auth::routes();
    //Route za Polisa
    Route::resource('polisa',PolisaController::class);
    //Route za Pismo
    Route::resource('pismo',PismoController::class);
    //Route za Format
    Route::resource('format',FormatController::class);
    //Route za Povez
    Route::resource('povez',PovezController::class);
    //Route za Zanr
    Route::resource('zanr',ZanrController::class);
    //Route za Kategoriju
    Route::resource('kategorija',KategorijaController::class);
    // route za Izdavac
    Route::resource('izdavac',IzdavacController::class);
    //Route za Autor
    Route::resource('autor',AutorController::class);
    // Route za Bibliotekar
    Route::resource('bibliotekar',BibliotekarController::class);
    Route::get('izdate-bibliotekar',[BibliotekarController::class,'izdate'])->name('blibliotekar.izdate');
   
    // Route za Ucenika
    Route::resource('ucenik',UcenikController::class);
    Route::get('izdate-ucenika/{ucenik}',[UcenikController::class,'izdate'])->name('ucenik.izdate');
    Route::get('vracene-ucenika/{ucenik}',[UcenikController::class,'vracene'])->name('ucenik.vracene');
    Route::get('pekoracenje-ucenika/{ucenik}',[UcenikController::class,'prekoracenje'])->name('ucenik.prekoracenje');
    Route::get('aktivne-rezervacije-ucenika/{ucenik}',[UcenikController::class,'aktivne'])->name('ucenik.aktivne');
    Route::get('arhivirane-rezervacije-ucenika/{ucenik}',[UcenikController::class,'arhivirane'])->name('ucenik.arhivirane');
    
    //Route za knjigu
    Route::get('knjiga0',[KnjigaController::class,'create0']);
    Route::resource('knjiga',KnjigaController::class);
    Route::get('knjiga-{knjiga}/specifikacija',[KnjigaController::class,'spec'])->name('knjiga.spec');
    Route::post('rezervisi/{knjiga}',[KnjigaController::class,'rezervisi'])->name('knjiga.rezervisi');
    Route::get('rezervacija/{knjiga}',[KnjigaController::class,'rezervacija'])->name('knjiga.rezervacija');
    Route::get('izdavanje/{knjiga}',[KnjigaController::class,'izdavanje'])->name('knjiga.izdavanje');
    Route::post('izdaj/{knjiga}',[KnjigaController::class,'izdaj'])->name('knjiga.izdaj');
    Route::get('iznajmljena/{knjiga}',[KnjigaController::class,'iznajmljena'])->name('knjiga.iznajmljena');
    Route::get('vracanje/{knjiga}',[KnjigaController::class,'vracanje'])->name('knjiga.vracanje');
    Route::post('vrati/{knjiga}',[KnjigaController::class,'vrati'])->name('knjiga.vrati');
    Route::get('otpis/{knjiga}',[KnjigaController::class,'otpis'])->name('knjiga.otpis');
    Route::post('otpisi/{knjiga}',[KnjigaController::class,'otpisi'])->name('knjiga.otpisi');
    Route::get('vracene/{knjiga}',[KnjigaController::class,'vracene'])->name('knjiga.vracene');
    Route::get('prekoracenje/{knjiga}',[KnjigaController::class,'prekoracenje'])->name('knjiga.prekoracenje');
    Route::get('izdate',[KnjigaController::class,'izdate'])->name('knjiga.izdate');
    Route::get('sve-vracene',[KnjigaController::class,'sve_vracene'])->name('knjiga.svevracene');
    Route::get('sva-prekoracenja',[KnjigaController::class,'sva_prekoracenja'])->name('knjiga.svaprekoracenja');
    Route::get('izdavanje-detalji/{izdavanje}',[KnjigaController::class,'izdavanje_detalji'])->name('knjiga.izdavanjedetalji');
    Route::get('aktivne-rezervacije/{knjiga}',[KnjigaController::class,'aktivne_rezervacije'])->name('knjiga.arezervacije');
    Route::get('arhivirane-rezervacije/{knjiga}',[KnjigaController::class,'arhivirane_rezervacije'])->name('knjiga.arhrezervacije');
    Route::get('sveaktivne-rezervacije',[KnjigaController::class,'sve_aktivne_rezervacije'])->name('knjiga.svearezervacije');
    Route::get('svearhivirane-rezervacije',[KnjigaController::class,'sve_arhivirane_rezervacije'])->name('knjiga.svearhrezervacije');

});
// kraj route za dashboard
// Route za dashboard
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

