<?php

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

Route::get('/', function () {
    return view('home', [
        'name' => 'Muhammad Fariz Ath Thoriq',
        'role' => 'kuli',
        'buah' => ['apel', 'ceri', 'duku',  'jeruk', 'kelengkeng', 'limau', 'nanas']
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tugas', function() {
    return view('tugas', [
        'nilai' => [
            'Bahasa Indonesia' => '70',
            'Basis Data Administrasi' => '75',
            'Workshop Pemrograman Mobile' => '80',
            'Kecerdasan Buatan' => '90',
            'Komputasi Awan' =>  '50'
        ]
    ]);
});


