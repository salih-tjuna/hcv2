<?php

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

Route::get('/twee', function () {
    return view('thuis_testen');
});

Route::get('/form', function ()
{
    return view('form');
});

Route::get('/beperk_risico', function ()
{
    return view('beperk_risico');
});

Route::get('/hpc_watnu', function ()
{
    return view('hpc_watnu');
});

Route::get('/contact', function ()
{
    return view('contact');
});

Route::get('/alles_over_HEPC', function ()
{
    return view('alles_over_HEPC');
});

Route::get('/overview', function ()
{
    return view('overview');
});

Route::get('/toolbox_bestellen', function ()
{
    return view('toolbox_bestellen');
});