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

Route::prefix('accessory')->group(function() {
    Route::prefix('sewing-trim')->group(function(){
        Route::get('/', fn()=>redirect()->route('accessory::sewing-trim.testing'))->name('accessory::sewing-trim');
        Route::get('/audit','SewingTrimController@audit')->name('accessory::sewing-trim.audit');
        Route::get('/testing','SewingTrimController@testing')->name('accessory::sewing-trim.testing');
        Route::get('/approval','SewingTrimController@approval')->name('accessory::sewing-trim.approval');
        Route::get('/inspection','SewingTrimController@inspection')->name('accessory::sewing-trim.inspection');
    });
    Route::prefix('packing-material')->group(function(){
        Route::get('/', fn()=>redirect()->route('accessory::packing-material.testing'))->name('accessory::packing-material');
        Route::get('/audit','PackingMaterialController@audit')->name('accessory::packing-material.audit');
        Route::get('/testing','PackingMaterialController@testing')->name('accessory::packing-material.testing');
        Route::get('/approval','PackingMaterialController@approval')->name('accessory::packing-material.approval');
        Route::get('/inspection','PackingMaterialController@inspection')->name('accessory::packing-material.inspection');
    });
    Route::prefix('hardware')->group(function(){
        Route::get('/', fn()=>redirect()->route('accessory::hardware.testing'))->name('accessory::hardware');
        Route::get('/audit','HardwareController@audit')->name('accessory::hardware.audit');
        Route::get('/testing','HardwareController@testing')->name('accessory::hardware.testing');
        Route::get('/approval','HardwareController@approval')->name('accessory::hardware.approval');
        Route::get('/inspection','HardwareController@inspection')->name('accessory::hardware.inspection');
    });
});
