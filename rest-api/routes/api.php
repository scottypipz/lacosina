<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ingredients
Route::get('ingredients', 'IngredientsController@index');
Route::get('ingredients/{ingredient}', 'IngredientsController@details');
Route::post('ingredients', 'IngredientsController@store');
Route::put('ingredients/{ingredient}', 'IngredientsController@update');
Route::delete('ingredients/{ingredient}', 'IngredientsController@delete');

// Procedures
Route::get('procedures', 'ProceduresController@index');
Route::get('procedures/{procedure}', 'ProceduresController@details');
Route::post('procedures', 'ProceduresController@store');
Route::put('procedures/{procedure}', 'ProceduresController@update');
Route::delete('procedures/{procedure}', 'ProceduresController@delete');

// Recipes
Route::get('recipes', 'RecipesController@index');
Route::get('recipes/{recipe}', 'RecipesController@details');
Route::get('recipes/{recipe}/ingredients', 'RecipesController@ingredients');
Route::get('recipes/{recipe}/procedures', 'RecipesController@procedures');
Route::post('recipes', 'RecipesController@store');
Route::post('recipes/{recipe}/ingredients', 'RecipesController@addIngredient');
Route::post('recipes/{recipe}/procedures', 'RecipesController@addProcedures');
Route::put('recipes/{recipe}', 'RecipesController@update');
Route::put('recipes/{recipe}/ingredients', 'RecipesController@updateIngredient');
Route::put('recipes/{recipe}/procedures', 'RecipesController@updateProcedures');
Route::delete('recipes/{recipe}', 'RecipesController@delete');
Route::delete('recipes/{recipe}/ingredients', 'RecipesController@deleteIngredient');
Route::delete('recipes/{recipe}/procedures', 'RecipesController@deleteProcedures');
