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

Route::prefix('complianceandproductsafety')->group(function() {
    // Route::get('/', 'ComplianceAndProductSafetyController@index');
    Route::prefix('safety')->group(function(){

        Route::prefix('humidity')->group(function(){
            Route::get('/',fn()=>redirect()->route('complianceandproductsafety::safety.humidity.report'))->name('complianceandproductsafety::safety.humidity');
            Route::get('/setup','Safety\HumidityController@setup')->name('complianceandproductsafety::safety.humidity.setup');
            Route::get('/report','Safety\HumidityController@report')->name('complianceandproductsafety::safety.humidity.report');
            Route::get('/inspector','Safety\HumidityController@inspector')->name('complianceandproductsafety::safety.humidity.inspector');
        });

        Route::prefix('pull-test')->group(function(){
            Route::get('/',fn()=>redirect()->route('complianceandproductsafety::safety.pull-test.report'))->name('complianceandproductsafety::safety.pull-test');
            Route::get('/setup','Safety\PullTestController@setup')->name('complianceandproductsafety::safety.pull-test.setup');
            Route::get('/report','Safety\PullTestController@report')->name('complianceandproductsafety::safety.pull-test.report');
            Route::get('/inspector','Safety\PullTestController@inspector')->name('complianceandproductsafety::safety.pull-test.inspector');
        });

        Route::prefix('button-testing')->group(function(){
            Route::get('/',fn()=>redirect()->route('complianceandproductsafety::safety.button-testing.report'))->name('complianceandproductsafety::safety.button-testing');
            Route::get('/setup','Safety\ButtonTestingController@setup')->name('complianceandproductsafety::safety.button-testing.setup');
            Route::get('/report','Safety\ButtonTestingController@report')->name('complianceandproductsafety::safety.button-testing.report');
            Route::get('/inspector','Safety\ButtonTestingController@inspector')->name('complianceandproductsafety::safety.button-testing.inspector');
        });

        Route::prefix('fusing-machine')->group(function(){
            Route::get('/',fn()=>redirect()->route('complianceandproductsafety::safety.fusing-machine.setup'))->name('complianceandproductsafety::safety.fusing-machine');
            Route::get('/setup','Safety\FusingMachineController@setup')->name('complianceandproductsafety::safety.fusing-machine.setup');
            Route::get('/report','Safety\FusingMachineController@report')->name('complianceandproductsafety::safety.fusing-machine.report');
            Route::get('/inspector','Safety\FusingMachineController@inspector')->name('complianceandproductsafety::safety.fusing-machine.inspector');
        });

        Route::prefix('heat-seal-machine')->group(function(){
            Route::get('/',fn()=>redirect()->route('complianceandproductsafety::safety.heat-seal-machine.report'))->name('complianceandproductsafety::safety.heat-seal-machine');
            Route::get('/setup','Safety\HeatSealMachineController@setup')->name('complianceandproductsafety::safety.heat-seal-machine.setup');
            Route::get('/report','Safety\HeatSealMachineController@report')->name('complianceandproductsafety::safety.heat-seal-machine.report');
            Route::get('/inspector','Safety\HeatSealMachineController@inspector')->name('complianceandproductsafety::safety.heat-seal-machine.inspector');
        });

        Route::prefix('checklist-of-compliance')->group(function(){
            Route::get('/',fn()=>redirect()->route('complianceandproductsafety::safety.checklist-of-compliance.report'))->name('complianceandproductsafety::safety.checklist-of-compliance');
            Route::get('/setup','Safety\ComplianceCheckListController@setup')->name('complianceandproductsafety::safety.checklist-of-compliance.setup');
            Route::get('/report','Safety\ComplianceCheckListController@report')->name('complianceandproductsafety::safety.checklist-of-compliance.report');
            Route::get('/inspector','Safety\ComplianceCheckListController@inspector')->name('complianceandproductsafety::safety.checklist-of-compliance.inspector');
        });

        Route::prefix('needle-detector-calibration')->group(function(){
            Route::get('/',fn()=>redirect()->route('complianceandproductsafety::safety.needle-detector-calibration.report'))->name('complianceandproductsafety::safety.needle-detector-calibration');
            Route::get('/setup','Safety\NeedleDetectorCalibrationController@setup')->name('complianceandproductsafety::safety.needle-detector-calibration.setup');
            Route::get('/report','Safety\NeedleDetectorCalibrationController@report')->name('complianceandproductsafety::safety.needle-detector-calibration.report');
            Route::get('/inspector','Safety\NeedleDetectorCalibrationController@inspector')->name('complianceandproductsafety::safety.needle-detector-calibration.inspector');
        });

    });
});
