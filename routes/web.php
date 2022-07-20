<?php



use Illuminate\Support\Facades\Route;

Use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Backend\UserController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::resource('employees', EmployeeController::class);
Route::resource('products', '\App\Http\Controllers\ProductController');
Route::resource('users', '\App\Http\Controllers\Backend\UserController');

Route::get('/about', function () {
    return view('about');
})->name('about');
