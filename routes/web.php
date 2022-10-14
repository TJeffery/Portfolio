<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
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
    return view('landing');
});

Route::get('/skills', [SkillController::class, 'index']);

Route::get('/experiences',[ExperienceController::class,'index']);

Route::get('/experience/{id}',[ExperienceController::class, 'show']);

Route::get('/contact',[ContactController::class,'create']);
Route::post('/contact',[ContactController::class,'store']);

Route::get('/projects',[ProjectController::class,'index']);

Route::get('/WILCrit', function ()
{
    return view('PlacementAssessment.show');
});

Route::get('/Transferable', function ()
{
    return view('Transferable.show');
});
Route::get('/MasterReflect', function ()
{
    return view('MastersReflection.show');
});
Route::get('/AddArt', function ()
{
    return view('AddArt.show');
});

