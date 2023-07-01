<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContactController;


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


Route::group(['namespace'=>'App\Http\Controllers'],function() {
    
    Route::get('/','HomeController@index')->name('welcome');
    //routes inicial
    Route::group(['middleware'=>['guest']],function(){
        //registrer routes
    //Route::get('/', function () {return view('welcome');});
    Route::get('/registrarse','RegisterController@show')->name('register.show');
    Route::post('/registrarse','RegisterController@register')->name('register.perform');
    
    Route::get('/login','LoginController@show')->name('auth.login');
    Route::post('/login','LoginController@login')->name('auth.perform');
    });
    //login
    //
    Route::group(['middleware'=>['auth']],function(){});
    //logout
    Route::get('/logout','LogoutController@performing');
    });


    //empleados

    Route::get('/listaEmployees',[EmployeesController::class,'index']);
    Route::get('/editEmployees/{id}',[EmployeesController::class,'edit']); 
    Route::put('/updateEmployees',[EmployeesController::class,'update']);
    Route::get('/deleteEmployees/{id}',[EmployeesController::class,'deleteEmployee']);
    //Route::get('/enviar_email/{id}',[EmployeesController::class,'emailEmployee']);
    Route::get('/enviar_email/{id}',[App\Http\Controllers\PruebaMailController::class,'pruebaMailAdjunto']);

    //products

Route::get('/IndexProducts',[ProductsController::class,'index']); 
Route::get('/editProduct/{id}',[ProductsController::class,'edit']); 
Route::put('/updateProduct',[ProductsController::class,'update']); 
Route::get('/deleteProduct/{id}',[ProductsController::class,'eliminarProducto']); 


//pdf

Route::get('/generate_pdf',[PDFController::class,'generatePDF']);
Route::get('/generate_presentacionPDF/{id}',[PDFController::class,'generatePresentacionPDF']);

//mail

Route::get('/sendMail',[App\Http\Controllers\PruebaMailController::class,'index']);
Route::get('/sendMailPDFadjunto',[App\Http\Controllers\PruebaMailController::class,'pruebaMailAdjunto']);

//conctact
Route::get('/conctact',[ContactController::class,'index']);
Route::put('/insertMenssage',[ContactController::class,'insertMenssage']);
Route::get('/sendMail',[App\Http\Controllers\PruebaMailController::class,'index']);
