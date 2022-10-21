<?php

use Illuminate\Support\Facades\Route;
// hna jabna path tae controller
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\PartieController;
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
/*****1****/
Route::get('/', function () {
    return view('welcome');
});
/****2****/
// problem c que mareliyinech gae controller 
// hda rasi lyabes yak

// hna jabna controller class w f west l class kayan childs li houma les functions public wela private wela protected
// hna andna f le cas hada index semouha la function mahtouta f wast class semouha ProgrammeController
Route::get('/programme', [ProgrammeController::class, 'index']);
Route::post('/programme', [ProgrammeController::class, 'add']);
Route::get('/programme/delete/{id}', [ProgrammeController::class, 'supp']);
Route::post('/programme/update', [ProgrammeController::class, 'modif'])->name('program.update');
Route::get('/programme-par-wilaya/{id}', [ProgrammeController::class, 'indexprojet']);
/****3****/

// hna diri la meme method 
Route::get('/liste-projets-total', function () {
    return view('liste-projets-total');
});
/****4****/
Route::get('/parties', function () {
    return view('parties');
});
Route::get('/parties', [PartieController::class, 'index']);
Route::post('/parties', [PartieController::class, 'add']);
Route::get('/parties/delete/{id}', [PartieController::class, 'supp']);
/****5****/
Route::get('/user-profile', function () {
    return view('user-profile');
});
/****6****/
Route::get('/programme-par-wilaya', function () {
    return view('programme-par-wilaya');
});

/****7****/
Route::get('/projet', function () {
    return view('projet');
});

/****8****/
Route::get('/partie-documents', function () {
    return view('partie-documents');
});

/****9****/
Route::get('/document', function () {
    return view('document');
});

/****10****/
Route::get('/authentification', function () {
    return view('authentification');
});
