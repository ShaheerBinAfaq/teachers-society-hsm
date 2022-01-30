<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DueController;

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
    return view('welcome');
});
Route::get('/report', function () {
    return view('report.index');
});
// Route::get('/report', [DueController::class, 'report']);

Route::resource('members', 'MembersController');
Route::resource('transfer', 'transferController');
Route::resource('bill', 'BillController');
Route::resource('due', 'DueController');
// Route::view('/report', 'report.index');
//Route::view('/transfer', 'bills/transfer');