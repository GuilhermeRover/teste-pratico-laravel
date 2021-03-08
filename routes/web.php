<?php

use App\Http\Livewire\Guest\Home;
use App\Http\Livewire\App\Dashboard;
use App\Http\Livewire\Guest\Auth\Login;
use App\Http\Livewire\Guest\Auth\Register;
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

Route::get('/', Home::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/login', Login::class);
Route::get('/cadastrar', Register::class);
