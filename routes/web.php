<?php

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
    return redirect()->to('/login');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', 'HomeController@index')->name('home');


    Route::resource('employees', 'Employees\EmployeeController', ['names' => [
        'index' => 'employees.index',
        'create' => 'employees.create',
        'show' => 'employees.show',
        'edit' => 'employees.edit',
        'store' => 'employees.store',
        'update' => 'employees.update',
        'destroy' => 'employees.destroy'
    ]]);

     Route::resource('departements', 'Departement\DepartementController', ['names' => [
        'index' => 'departements.index',
        'create' => 'departements.create',
        'show' => 'departements.show',
        'edit' => 'departements.edit',
        'store' => 'departements.store',
        'update' => 'departements.update',
        'destroy' => 'departements.destroy'
    ]]);

});

Auth::routes();



