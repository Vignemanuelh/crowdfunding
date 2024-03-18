<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WelcomeController;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [WelcomeController::class, 'index'] );

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/details/{project}', [ProjectController::class, 'show'])->name('details');
Route::get('/contact', function (){
    return view('layouts.contact');
})->name('contact');
Route::get('/about', function (){
    return view('layouts.about');
})->name('about');

Route::middleware(['auth'])->group(function () {

Route::get('/project/create', function (){
    return view('dashboard.project.create');
})->name('pcreate');
Route::post ('/project/store', [ProjectController::class, 'store'])->name('pstore');
Route::get ('/project/list', [ProjectController::class, 'list'])->name('plist');
Route::get('/project/edit/{project}', [ProjectController::class, 'edit'])->name('pedit');
Route::post ('/project/update/{project}', [ProjectController::class, 'update'])->name('pupdate');
Route::get ('/project/delete/{project}', [ProjectController::class, 'destroy'])->name('pdelete');


});

