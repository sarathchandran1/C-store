<?php

use App\Http\Controllers\project1controller;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

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
//project controller
Route::get('/', [project1controller::class, 'index']);

Route::get('/about', [project1controller::class, 'about']);

Route::get('/adminlogin', [project1controller::class, 'adminlogin']);
Route::post('/adminaction', [project1controller::class, 'adminaction']);
Route::get('/userlogin', [project1controller::class, 'userlogin']);
Route::post('/useraction', [project1controller::class, 'useraction']);
Route::get('/contact', [project1controller::class, 'contact']);
Route::post('/contactaction', [project1controller::class, 'contactaction']);


Route::get('/userregister', [project1controller::class, 'userregister']);
Route::post('/userregisteraction', [project1controller::class, 'userregisteraction']);
Route::get('/logout',[project1controller::class,'logout']);





//admin controller
Route::get('/admin', [adminController::class, 'index']);

//about
Route::get('/addabout', [adminController::class, 'addabout']);
Route::post('/addaboutaction', [adminController::class, 'addaboutaction']);
Route::get('/viewabout', [adminController::class, 'viewabout']);
Route::post('/viewaboutaction', [adminController::class, 'viewaboutaction']);
Route::get('/deleteabout/{id}', [adminController::class, 'deleteabout']);
Route::get('/editabout/{id}', [adminController::class, 'editabout']);
Route::post('/editaboutaction/{id}', [adminController::class, 'editaboutaction']);

//product

Route::get('/addproduct', [adminController::class, 'addproduct']);
Route::post('/addproductaction', [adminController::class, 'addproductaction']);
Route::get('/viewproduct1', [adminController::class, 'viewproduct']);
Route::get('/deleteproduct/{id}', [adminController::class, 'deleteproduct']);
Route::get('/editproduct/{id}', [adminController::class, 'editproduct']);
Route::post('/editproductaction/{id}', [adminController::class, 'editviewaction']);

Route::get('/adminvieworders', [adminController::class, 'vieworders']);
Route::get('/viewusers', [adminController::class, 'viewusers']);
Route::get('/adminprofile', [adminController::class, 'adminprofile']);
Route::post('/adminprofileaction', [adminController::class, 'adminprofileaction']);

Route::get('/cancel/{id}', [adminController::class, 'cancel']);
Route::get('/payementcomplted/{id}', [adminController::class, 'payementcomplted']);



//user controller

Route::get('/user', [usercontroller::class, 'index']);
Route::get('/viewproduct', [usercontroller::class, 'viewproduct']);
Route::get('/viewcart', [usercontroller::class, 'viewcart']);
Route::get('/vieworders', [usercontroller::class, 'vieworders']);


Route::get('/myprofile', [usercontroller::class, 'myprofile']);
Route::post('/myprofileaction/{id}', [usercontroller::class, 'myprofileaction']);
Route::get('/addtocart/{id}', [usercontroller::class, 'addtocart']);
Route::post('/addtocartaction', [usercontroller::class, 'addtocartaction']);
Route::get('/deletecart/{id}', [usercontroller::class,'deletecart']);
Route::get('/buynow',[usercontroller::class,'buynow']);
 Route::post('/buynowaction', [usercontroller::class, 'buynowaction']);
Route::get('/placeorder', [usercontroller::class, 'placeorder']);