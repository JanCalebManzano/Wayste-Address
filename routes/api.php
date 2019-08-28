<?php

use Illuminate\Http\Request;

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

Route::apiResource('/countries', 'CountryController');

Route::apiResource('/countries.regions', 'RegionController');

Route::apiResource('/countries.regions.provinces', 'ProvinceController');

Route::apiResource('/countries.regions.provinces.muncities', 'MuncityController');

Route::apiResource('/countries.regions.provinces.muncities.barangays', 'BarangayController');
