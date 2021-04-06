<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AddressController;
use \App\Http\Controllers\AddressImportController;

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

/**
 * General api urls here
 */
Route::group(['middleware' => ['api.auth'], 'prefix' => 'v1'], function () {
    Route::get('/addressByZip/', [AddressController::class, 'getAddressByZip'])
        ->name('get.address.by.zip');
    Route::get('/addressByCity/', [AddressController::class, 'getAddressByCity'])
        ->name('get.address.by.city');
});

/**
 * Additional (Admin) links below
 */
Route::get('/address/update', [AddressImportController::class, 'updateAddressesCsv'])
    ->name('update.addresses.csv')
    ->middleware(['admin.auth']);
