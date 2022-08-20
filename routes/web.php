<?php

use App\Http\Controllers\FormCreatorController;
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

Route::get('/', [FormCreatorController::class, 'index']);


//this will get all of the tags and elements that the user wants to use in the result form.
Route::post('FormStuffs', [FormCreatorController::class, 'FormStuffs'])->name('FormStuffs');

Route::get('stuff', [FormCreatorController::class, 'stuff'])->name('stuff');