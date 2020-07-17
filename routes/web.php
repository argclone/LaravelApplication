<?php

use Illuminate\Support\Facades\Route;
use App\User;

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

Route::get('/userlist', function () {
    $umUsuarioQualquer = new User;
    $umUsuarioQualquer->name = 'aUserName';

    $timestamp = date("Y-m-d-h-i-sa");
    $umUsuarioQualquer->email = "adsf@asdf.com".$timestamp;
    
    $umUsuarioQualquer->password = '123';
    $umUsuarioQualquer->save();
    return User::all();
});

Route::get('FormTarefaDeBackup', 'TarefaDeBackupController@create')->name('FormTarefaDeBackup.create');
Route::post('FormTarefaDeBackup', 'TarefaDeBackupController@store')->name('FormTarefaDeBackup.store');
