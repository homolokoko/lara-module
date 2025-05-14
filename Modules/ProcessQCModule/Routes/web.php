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

Route::prefix('processqcmodule')->group(function() {

    Route::prefix('cutting')->group(function(){
        Route::prefix('inline-audit')->group(function(){
          Route::get('/', fn()=>redirect()->route('processqcmodule::cutting.inline-audit.inline-cutting'))->name('processqcmodule::cutting.inline-audit');
          Route::get('/inline-cutting','Cutting\InlineAuditController@inlineCutting')->name('processqcmodule::cutting.inline-audit.inline-cutting');
          Route::get('/fabric-audit','Cutting\InlineAuditController@fabricAudit')->name('processqcmodule::cutting.inline-audit.fabric-audit');
        });
        Route::prefix('endline-inspection')->group(function(){
          Route::get('/', fn()=>redirect()->route('processqcmodule::cutting.endline-inspection.endline-cutting'))->name('processqcmodule::cutting.endline-inspection');
          Route::get('/endline-cutting','Cutting\EndlineInspectionController@endlineCutting')->name('processqcmodule::cutting.endline-inspection.endline-cutting');
          Route::get('/fabric-inspection','Cutting\EndlineInspectionController@fabricInspection')->name('processqcmodule::cutting.endline-inspection.fabric-inspection');
        });
    });

    Route::prefix('embellishment')->group(function(){
        Route::prefix('inline-audit')->group(function(){
            Route::get('/',fn()=>redirect()->route('processqcmodule::embellishment.inline-audit.audit'))->name('processqcmodule::embellishment.inline-audit');
            Route::get('/audit','Embellishment\InlineAuditController@audit')->name('processqcmodule::embellishment.inline-audit.audit');
        });
        Route::prefix('inspection')->group(function(){
            Route::get('/',fn()=>redirect()->route('processqcmodule::embellishment.inspection.endline'))->name('processqcmodule::embellishment.inspection');
            Route::get('/endline','Embellishment\InspectionController@endline')->name('processqcmodule::embellishment.inspection.endline');
        });
    });

    Route::prefix('assembly/sewing-online')->group(function(){

        Route::prefix('inline-audit')->group(function(){
            Route::get('/',fn()=>redirect()->route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit'))->name('processqcmodule::assembly/sewing-online.inline-audit');
            Route::get('/inline','AssemblySewwingOnline\InlineAuditController@inline')->name('processqcmodule::assembly/sewing-online.inline-audit.inline');
            Route::get('/first-bulk','AssemblySewwingOnline\InlineAuditController@firstBulk')->name('processqcmodule::assembly/sewing-online.inline-audit.first-bulk');
            // Route::get('/measurement-audit','AssemblySewwingOnline\InlineAuditController@measurementAudit')->name('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit');

            Route::prefix('measurement-audit')->group(function(){
                Route::get('/',fn()=>redirect()->route('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.setup'))->name('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit');
                Route::get('/setup', 'AssemblySewingOnline\InlineAudit\MeasurementAuditController@setup')->name('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.setup');
                Route::get('/report', 'AssemblySewingOnline\InlineAudit\MeasurementAuditController@report')->name('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.report');
                Route::get('/inspector', 'AssemblySewingOnline\InlineAudit\MeasurementAuditController@inspector')->name('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.inspector');
            });

        });

    });

});
