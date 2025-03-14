<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;

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

Route::middleware("guest")->group(function () {
    Route::post('/register', [UserController::class, 'registration'])->name('registration');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});




Route::middleware("auth")->group(function () {
   Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [PagesController::class, 'viewProfile'])->name('view.profile');
    Route::get('/profile/edit', [PagesController::class, 'viewProfileEdit'])->name('view.profile.edit');
    Route::post('/application/store', [ApplicationController::class, 'applicationCreate'])->name('application.store');
    Route::put('/application/update/{application}', [ApplicationController::class, 'applicationUpdate'])->name('application.update');
});

Route::controller(AdminController::class)->middleware('check.admin')->prefix('admin')->name('admin.')->group(function (){
    Route::get('/', 'showMain')->name('view.main');
    Route::get('/event/create', 'showCreate')->name('view.create');
    Route::post('/event/store', 'storeEvent')->name('event.store');
    Route::get('/applications', 'showApplications')->name('view.applications');

});


Route::get('/', [PagesController::class, 'viewEvent'])->name('view.event');


