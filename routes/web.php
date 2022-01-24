<?php

// creare nuvo progetto
// lanciare server (php artisan serve)
// vedere home-page di laravel di default

// eliminare welcome.blade.php
// generare il necessario per definire il layout con header + footer come componenti:
// - layouts.main-layout
// - components.header
// - components.footer

// generare file pages.home che estende il layout e definisce la sezione 'content' con "Hello World from Home"
// generare file pages.test che estende il layout e definisce la sezione 'content' con "Hello World from Test"

// associare le due view definite con i percorsi relativi nel web.php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.main');
})->name('comics');

Route::get('detail', function () {
    return view('pages.detail');
})->name('detail');
