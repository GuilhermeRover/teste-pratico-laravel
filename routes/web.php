<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Guest\Home;
use App\Http\Livewire\Guest\Auth\Login;
use App\Http\Livewire\Guest\Auth\Register;

use App\Http\Livewire\App\Dashboard;
use App\Http\Livewire\App\User;
use App\Http\Livewire\App\Products;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// set locale for '/admin/anything/[en|fr|ru|jp]/anything' only
if (in_array(Request::segment(1),['ar', 'az', 'be', 'bg', 'bn', 'bs', 'ca', 'cs', 'cy', 'da', 'de', 'de_CH', 'el', 'en', 'es', 'et', 'eu', 'fa', 'fi', 'fil', 'fr', 'gl', 'he', 'hi', 'hr', 'hu', 'hy', 'id', 'is', 'it', 'ja', 'ka', 'kk', 'km', 'kn', 'ko', 'lt', 'lv', 'mk', 'mn', 'mr', 'ms', 'nb', 'ne', 'nl', 'nn', 'oc', 'pl', 'ps', 'pt', 'pt_BR', 'ro', 'ru', 'sc', 'si', 'sk', 'sl', 'sq', 'sr_Cyrl', 'sr_Latn', 'sr_Latn_ME', 'sv', 'sw', 'tg', 'th', 'tk', 'tl', 'tr', 'ug', 'uk', 'ur', 'uz_Cyrl', 'uz_Latn', 'vi', 'zh_CN', 'zh_HK', 'zh_TW'])) {
    App::setLocale(Request::segment(1));
} else {
    // set default / fallback locale
    App::setLocale('en');
}
*/

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/cadastrar', Register::class)->name('register');


Route::post('logout', LogoutController::class)
->name('logout')->middleware('auth');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function() {

    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/usuarios', User::class)->name('users');
    Route::get('/produtos', Products::class)->name('products');

    Route::get('lang/{locale}', 'App\Http\Controllers\LocalizationController@index')->name('lang');
});
/*
Route::group(['prefix' => '{locale}'], function() {
    
    Route::get('/', Home::class);
    Route::get('/login', Login::class);
    Route::get('/cadastrar', Register::class);

    Route::get('/dashboard', Dashboard::class);
    Route::get('/usuarios', User::class);
    Route::get('/produtos', Products::class);
    
});
*/
