<?php
/*
|--------------------------------------------------------------------------
| Mobile API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register mobile API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

/**
 * Show current time to check if the mobile
 * routing is configured correctly
 */

Route::any('/', function () {
    return response()->json(['server_time' => \Carbon\Carbon::now()], 200, []);
});

//All version 1 related routes come here.
Route::prefix('v1')->name('1.')->namespace('\v1')->middleware('auth:mobile')->group(function () {

});
