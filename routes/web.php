<?php

use App\Http\Controllers\SeriesController;
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
    return view('welcome');
});

Route::get( '/_hello', function () {
    echo '<h1>Hello, World!</h1>';
} );

Route::get( '/hello', function () {
    ?>
        <h1>Hello, World!</h1>
    <?php
} );

Route::get( '/series', [ SeriesController::class, 'index' ] );
Route::get( '/series/create', [ SeriesController::class, 'create' ] );
Route::post( '/series/save', [ SeriesController::class, 'save' ] );
