<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/new_users', function () {
    return view('new_users');
});

Route::post('/reg_new_user', [App\Http\Controllers\RegNewUserController::class, 'new_user'])->name('new_user');

Route::post('/validate', [App\Http\Controllers\HomeController::class, 'validation'])->name('validation');

Route::post('/validate_admin', [App\Http\Controllers\HomeController::class, 'validate_admin'])->name('validate_admin');

Route::get('/new', [App\Http\Controllers\ExperimentController::class, 'new'])->name('new');

Route::post('/create', [App\Http\Controllers\ExperimentController::class, 'create'])->name('create');

Route::get('/update', [App\Http\Controllers\ExperimentController::class, 'update'])->name('update');

Route::post('/update_redirectionLink', [App\Http\Controllers\ExperimentController::class, 'update_redirection_link'])->name('update');

Route::get('/delete', [App\Http\Controllers\ExperimentController::class, 'delete'])->name('delete');

Route::get('/export', [App\Http\Controllers\ExperimentController::class, 'export'])->name('export');

Route::get('/instruction1', function () {
    return view('instruction1');
});

Route::get('/instruction2', function () {
    return view('instruction2');
});

Route::post('/instruction3', function () {
    return view('instruction3');
});

Route::post('/instruction4', function () {
    return view('instruction4');
});

Route::get('/instruction4', function () {
    return view('instruction4');
});

Route::post('/instruction5', function () {
    return view('instruction5');
});

Route::get('/instruction5', function () {
    return view('instruction5');
});

Route::get('/instruction6', function () {
    return view('instruction6');
});

Route::get('/instruction6', function () {
    return view('instruction6');
});

Route::post('/instruction7', [App\Http\Controllers\GameController::class, 'insert'])->name('instruction7');

Route::get('/instruction7', [App\Http\Controllers\GameController::class, 'insert'])->name('instruction7');

Route::get('/intertask', function () {
    return view('intertask');
});

Route::get('/intertask2', function () {
    return view('intertask2');
});

Route::get('/intertask3', function () {
    return view('intertask3');
});

Route::get('/intertask4', function () {
    return view('intertask4');
});

Route::get('/entrainement1', function () {
    return view('entrainement1');
});

Route::post('/entrainement2', function () {
    return view('entrainement2');
});
Route::get('/entrainement2', function () {
    return view('entrainement2');
});

Route::post('/entrainement3', function () {
    return view('entrainement3');
});
Route::get('/entrainement3', function () {
    return view('entrainement3');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/game2', function () {
    return view('game2');
});

// ***************************** ENGLISH ******************************//
Route::get('/en/instruction1', function () {
    return view('/en/instruction1');
});

Route::get('/en/instruction2', function () {
    return view('/en/instruction2');
});

Route::post('/en/instruction3', function () {
    return view('/en/instruction3');
});

Route::post('/en/instruction4', function () {
    return view('/en/instruction4');
});

Route::get('/en/instruction4', function () {
    return view('/en/instruction4');
});

Route::post('/en/instruction5', function () {
    return view('/en/instruction5');
});

Route::get('/en/instruction6', function () {
    return view('/en/instruction6');
});

Route::get('/en/intertask', function () {
    return view('/en/intertask');
});

Route::get('/en/intertask2', function () {
    return view('/en/intertask2');
});

Route::get('/en/intertask3', function () {
    return view('/en/intertask3');
});

Route::get('/en/intertask4', function () {
    return view('/en/intertask4');
});

Route::get('/en/entrainement1', function () {
    return view('/en/entrainement1');
});

Route::post('/en/entrainement2', function () {
    return view('/en/entrainement2');
});
Route::get('/en/entrainement2', function () {
    return view('/en/entrainement2');
});

Route::post('/en/entrainement3', function () {
    return view('/en/entrainement3');
});
Route::get('/en/entrainement3', function () {
    return view('/en/entrainement3');
});

Route::get('/en/game', function () {
    return view('/en/game');
});

Route::get('/en/game2', function () {
    return view('/en/game2');
});

Route::post('/en/instruction7', [App\Http\Controllers\GameController::class, 'insert_en'])->name('instruction7');

Route::get('/en/instruction7', [App\Http\Controllers\GameController::class, 'insert_en'])->name('instruction7');

// ***************************** GERMAN ******************************//
Route::get('/de/instruction1', function () {
    return view('/de/instruction1');
});

Route::get('/de/instruction2', function () {
    return view('/de/instruction2');
});

Route::post('/de/instruction3', function () {
    return view('/de/instruction3');
});

Route::post('/de/instruction4', function () {
    return view('/de/instruction4');
});

Route::get('/de/instruction4', function () {
    return view('/de/instruction4');
});

Route::post('/de/instruction5', function () {
    return view('/de/instruction5');
});

Route::get('/de/instruction6', function () {
    return view('/de/instruction6');
});

Route::get('/de/intertask', function () {
    return view('/de/intertask');
});

Route::get('/de/intertask2', function () {
    return view('/de/intertask2');
});

Route::get('/de/intertask3', function () {
    return view('/de/intertask3');
});

Route::get('/de/intertask4', function () {
    return view('/de/intertask4');
});

Route::get('/de/entrainement1', function () {
    return view('/de/entrainement1');
});

Route::post('/de/entrainement2', function () {
    return view('/de/entrainement2');
});
Route::get('/de/entrainement2', function () {
    return view('/de/entrainement2');
});

Route::post('/de/entrainement3', function () {
    return view('/de/entrainement3');
});
Route::get('/de/entrainement3', function () {
    return view('/de/entrainement3');
});

Route::get('/de/game', function () {
    return view('/de/game');
});

Route::get('/de/game2', function () {
    return view('/de/game2');
});

Route::post('/de/instruction7', [App\Http\Controllers\GameController::class, 'insert_de'])->name('instruction7');

Route::get('/de/instruction7', [App\Http\Controllers\GameController::class, 'insert_de'])->name('instruction7');

// ***************************** ITALIAN ******************************//
Route::get('/it/instruction1', function () {
    return view('/it/instruction1');
});

Route::get('/it/instruction2', function () {
    return view('/it/instruction2');
});

Route::post('/it/instruction3', function () {
    return view('/it/instruction3');
});

Route::post('/it/instruction4', function () {
    return view('/it/instruction4');
});

Route::get('/it/instruction4', function () {
    return view('/it/instruction4');
});

Route::post('/it/instruction5', function () {
    return view('/it/instruction5');
});

Route::get('/it/instruction6', function () {
    return view('/it/instruction6');
});

Route::get('/it/intertask', function () {
    return view('/it/intertask');
});

Route::get('/it/intertask2', function () {
    return view('/it/intertask2');
});

Route::get('/it/intertask3', function () {
    return view('/it/intertask3');
});

Route::get('/it/intertask4', function () {
    return view('/it/intertask4');
});

Route::get('/it/entrainement1', function () {
    return view('/it/entrainement1');
});

Route::post('/it/entrainement2', function () {
    return view('/it/entrainement2');
});
Route::get('/it/entrainement2', function () {
    return view('/it/entrainement2');
});

Route::post('/it/entrainement3', function () {
    return view('/it/entrainement3');
});
Route::get('/it/entrainement3', function () {
    return view('/it/entrainement3');
});

Route::get('/it/game', function () {
    return view('/it/game');
});

Route::get('/it/game2', function () {
    return view('/it/game2');
});

Route::post('/it/instruction7', [App\Http\Controllers\GameController::class, 'insert_it'])->name('instruction7');

Route::get('/it/instruction7', [App\Http\Controllers\GameController::class, 'insert_it'])->name('instruction7');

// ***************************** DUTCH ******************************//
Route::get('/nl/instruction1', function () {
    return view('/nl/instruction1');
});

Route::get('/nl/instruction2', function () {
    return view('/nl/instruction2');
});

Route::post('/nl/instruction3', function () {
    return view('/nl/instruction3');
});

Route::post('/nl/instruction4', function () {
    return view('/nl/instruction4');
});

Route::get('/nl/instruction4', function () {
    return view('/nl/instruction4');
});

Route::post('/nl/instruction5', function () {
    return view('/nl/instruction5');
});

Route::get('/nl/instruction6', function () {
    return view('/nl/instruction6');
});

Route::get('/nl/intertask', function () {
    return view('/nl/intertask');
});

Route::get('/nl/intertask2', function () {
    return view('/nl/intertask2');
});

Route::get('/nl/intertask3', function () {
    return view('/nl/intertask3');
});

Route::get('/nl/intertask4', function () {
    return view('/nl/intertask4');
});

Route::get('/nl/entrainement1', function () {
    return view('/nl/entrainement1');
});

Route::post('/nl/entrainement2', function () {
    return view('/nl/entrainement2');
});
Route::get('/nl/entrainement2', function () {
    return view('/nl/entrainement2');
});

Route::post('/nl/entrainement3', function () {
    return view('/nl/entrainement3');
});
Route::get('/nl/entrainement3', function () {
    return view('/nl/entrainement3');
});

Route::get('/nl/game', function () {
    return view('/nl/game');
});

Route::get('/nl/game2', function () {
    return view('/nl/game2');
});

Route::post('/nl/instruction7', [App\Http\Controllers\GameController::class, 'insert_nl'])->name('instruction7');

Route::get('/nl/instruction7', [App\Http\Controllers\GameController::class, 'insert_nl'])->name('instruction7');

// ***************************** CHINESE ******************************//
Route::get('/zh/instruction1', function () {
    return view('/zh/instruction1');
});

Route::get('/zh/instruction2', function () {
    return view('/zh/instruction2');
});

Route::post('/zh/instruction3', function () {
    return view('/zh/instruction3');
});

Route::post('/zh/instruction4', function () {
    return view('/zh/instruction4');
});

Route::get('/zh/instruction4', function () {
    return view('/zh/instruction4');
});

Route::post('/zh/instruction5', function () {
    return view('/zh/instruction5');
});

Route::get('/zh/instruction6', function () {
    return view('/zh/instruction6');
});

Route::get('/zh/intertask', function () {
    return view('/zh/intertask');
});

Route::get('/zh/intertask2', function () {
    return view('/zh/intertask2');
});

Route::get('/zh/intertask3', function () {
    return view('/zh/intertask3');
});

Route::get('/zh/intertask4', function () {
    return view('/zh/intertask4');
});

Route::get('/zh/entrainement1', function () {
    return view('/zh/entrainement1');
});

Route::post('/zh/entrainement2', function () {
    return view('/zh/entrainement2');
});
Route::get('/zh/entrainement2', function () {
    return view('/zh/entrainement2');
});

Route::post('/zh/entrainement3', function () {
    return view('/zh/entrainement3');
});
Route::get('/zh/entrainement3', function () {
    return view('/zh/entrainement3');
});

Route::get('/zh/game', function () {
    return view('/zh/game');
});

Route::get('/zh/game2', function () {
    return view('/zh/game2');
});

Route::post('/zh/instruction7', [App\Http\Controllers\GameController::class, 'insert_zh'])->name('instruction7');

Route::get('/zh/instruction7', [App\Http\Controllers\GameController::class, 'insert_zh'])->name('instruction7');