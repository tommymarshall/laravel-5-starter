<?php

Route::get('/', function () {
    return 'Awesome';
});

Route::controller('auth', 'Auth\AuthController');
Route::controller('password', 'Auth\RemindersController');
