<?php

use App\Http\Controllers\CilentController;
use App\Http\Controllers\ExcelImportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cilent/show', [CilentController::class, 'index']);
Route::post('cilent/create', [CilentController::class, 'store']);
Route::put('cilent/update/{id}', [CilentController::class, 'update']);
Route::get('cilent_action',[CilentController::class,'cilent_action']);

Route::post('cilent/import_from_excel',[ExcelImportController::class, 'importFromExcel']);
//shu yerda shu routni middlwega kiritish kerakmi?

Route::post('cilent/export_to_excel',[ExcelImportController::class, 'exportToExcel']);
