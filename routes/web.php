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
    $data = [
        'name' => 'Nicola',
        'lastname' => 'Sarli',
        'isLoggedIn' => false,
        'students' => [
            // [
            //     'name' => 'Vitantonio',
            //     'lastname' => 'Paparella',
            // ],
            // [
            //     'name' => 'Carlo',
            //     'lastname' => 'Lollobrigida'
            // ],
            // [
            //     'name' => 'Sara',
            //     'lastname' => 'Genuardi'
            // ]
        ]
    ];

    return view('home', $data);
});

Route::get('/chi-siamo', function () {
    return view('about');
});
