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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboardd');
})->middleware(['auth'])->name('dashboard');


Route::get('/alunos', 'App\Http\Controllers\UsersController@index');
Route::post('/aluno/create', 'App\Http\Controllers\UsersController@create')->name('aluno.create');
Route::post('/aluno/delete', 'App\Http\Controllers\UsersController@delete')->name('aluno.delete');
Route::get('/aluno/edit/{id}', 'App\Http\Controllers\UsersController@edit')->name('aluno.edit');
Route::post('/aluno/update', 'App\Http\Controllers\UsersController@update')->name('aluno.update');


Route::get('/create', function () {
    return view('users/create');
});


Route::get('/training', 'App\Http\Controllers\TrainingSheetsController@index');
 Route::get('/training/{id}', 'App\Http\Controllers\TrainingSheetsController@show2');
 Route::post('/training/teste', 'App\Http\Controllers\TrainingSheetsController@create');
 Route::post('/training/delete', 'App\Http\Controllers\TrainingSheetsController@delete');
 
 Route::get('/trainingDias', 'App\Http\Controllers\TrainingSheetsController@trainingDias');


Route::get('/createTraining', function () {
    return view('trainingSheets/createAntigo');
});

Route::get('/training/exerc/{id}', 'App\Http\Controllers\TrainingSheetsController@exerc');


/* Route::get('/createTreino', function () {
    return view('trainingSheets/create');
}); */

Route::get('/createTreino', 'App\Http\Controllers\TrainingSheetsController@criatreino');
 

Route::post('/training/addteste', 'App\Http\Controllers\TrainingSheetsController@addteste');



Route::get('/createCategoria', 'App\Http\Controllers\CategoriesController@create');
Route::get('/categorias', 'App\Http\Controllers\CategoriesController@index');

Route::get('/addcateg/{name}', 'App\Http\Controllers\CategoriesController@addTreino');
Route::post('/adicionaExercicio', 'App\Http\Controllers\CategoriesController@AdicionaExercicio')->name('adicionaExercicio');


/* 
Route::get('/addcateg', function () {
    return view('categories/add');
});
 */

Route::get('/createFicha', function () {
    return view('files/create');
});

Route::get('/showw/{id}', 'App\Http\Controllers\FilesController@show2');


Route::get('/createFicha/{id}', 'App\Http\Controllers\FilesController@index')->name('createFicha');
Route::post('/createFicha/add/{id}', 'App\Http\Controllers\FilesController@create')->name('createFicha.add');
Route::get('/listFichas', 'App\Http\Controllers\FilesController@listFichas');
Route::get('/ficha/{id}', 'App\Http\Controllers\FilesController@show');
Route::post('/ficha/update', 'App\Http\Controllers\FilesController@update')->name('ficha.update');
Route::post('/ficha/delete', 'App\Http\Controllers\FilesController@delete')->name('ficha.delete');



Route::get('firebase','App\Http\Controllers\FirebaseController@index');


require __DIR__.'/auth.php';
