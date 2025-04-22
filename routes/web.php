<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\type;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard', [
            'type_menu' => 'dashboard'
        ]);
    })->name('home');


});
