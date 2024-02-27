<?php

use App\Http\Controllers\CandidateController;
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

Route::get('/', function () {
    return view('pages.home.show');
});

Route::get('/candidate/dashboard', [CandidateController::class, 'viewDashboard']);
Route::post('/candidate/register', [CandidateController::class, 'store']);