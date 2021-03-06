<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::controller("home", "HomeController");

Route::controller("customer", "CustomerController");

Route::controller("product", "ProductController");

Route::controller("company", "CompanyController");

Route::controller("partner", "PartnerController");

Route::controller("career", "CareerController");

Route::controller("download", "DownloadController");

Route::controller("news", "NewsController");
