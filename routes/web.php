<?php

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
/**
 * Rutas para el frontend
 */
Route::get('/', array('uses' => 'Frontend\FrontendController@index', 'as' => 'frontend.index'));
Route::get('/contact', array('uses' => 'Frontend\FrontendController@contact', 'as' => 'frontend.contact'));
Route::get('/frontend/experiences', array('uses' => 'Frontend\FrontendController@experiences', 'as' => 'frontend.experiences'));
Route::get('/frontend/experiences/create', array('uses' => 'Frontend\FrontendController@experiencesCreate', 'as' => 'frontend.experiences.create'));
Route::post('/frontend/experiences/orderby', array('uses' => 'Frontend\FrontendController@experiencesorderby', 'as' => 'frontend.experiences.orderby'));
Route::post('/frontend/experiences/store', array('uses' => 'Frontend\FrontendController@experiencesStore', 'as' => 'frontend.experiences.store'));
Route::get('/login', array('uses' => 'LoginController@index', 'as' => 'login'));
Route::post('/login', array('uses' => 'LoginController@login', 'as' => 'login'));
Route::get('/register', array('uses' => 'LoginController@registerForm', 'as' => 'register'));
Route::get('/experience/likeup/{id}', array('uses' => 'Frontend\FrontendController@likeup', 'as' => 'experience.likeup'));

// Serivira para utilizar las rutas de loguin por defecto
// Auth::routes();

// Rutas para el backend
Route::get('/home', 'Backend\BackendController@index');


// rutas para la api
Route::resource('/api/experiences', 'Api\ExperiencesController');
Route::resource('/api/locations', 'Api\LocationsController');
Route::resource('/api/users', 'Api\UsersController');
Route::get('/api/comments/{id}', 'Api\ExperiencesController@test');


// backend
Route::get('/backend/index', array('uses' => 'Backend\BackendController@index', 'as' => 'backend.index'));

Route::resource('/experiences', 'Backend\ExperiencesController');

// Importation
Route::get('/import', 'ImportController@index');
