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
    return view('welcome');
});

Route::get('/home', function () {
    return "Hello";
});

Route::view('firstview','test');

Route::get('/controller','testcontroller@testfunction');

Route::get('/htmlsamples','samplecontroller@samplefunction');

Route::get('/cssproject1','cssproject1@cssproject1');

Route::get('/cssexample','cssproject1@cssexample');

// CSS Assignments

Route::get('/cssassignments', function () {
    return view('cssassignments');
});

Route::get('/cssassignments/assignment1', function () {
    return view('cssassignments/assignment1');
});

Route::get('/cssassignments/assignment2', function () {
    return view('cssassignments/assignment2');
});

Route::get('/cssassignments/assignment3', function () {
    return view('cssassignments/assignment3');
});

Route::get('/cssassignments/assignment4', function () {
    return view('cssassignments/assignment4');
});

Route::get('/cssassignments/assignment5', function () {
    return view('cssassignments/assignment5');
});

Route::get('/cssassignments/assignment6', function () {
    return view('cssassignments/assignment6');
});

Route::get('/cssassignments/assignment7', function () {
    return view('cssassignments/assignment7');
});

Route::get('/cssassignments/assignment9', function () {
    return view('cssassignments/assignment9');
});