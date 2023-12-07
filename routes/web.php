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

    $data = [
        'title' => 'Hello! First steps on laravel !'
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {

    $data = [
        'title' => 'You\'re on about page!, let\'s talk about mee',
        'name' => 'Michele'
    ];

    return view('about', $data);
})->name('about');

Route::get('/info', function () {

    $data = [
        'title' => 'You\'re on info page!, here you can find all my social contacts',
        'socials' => [
            [
                'name' => 'Instagram',
                'link' => '#'
            ],
            [
                'name' => 'Facebook',
                'link' => '#'
            ],
            [
                'name' => 'Telegram',
                'link' => '#'
            ]
        ]
    ];

    return view('info', $data);
})->name('info');