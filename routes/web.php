<?php

use Illuminate\Support\Facades\Route;

Route::get('/blog', 'BlogController@index')->name('blog');
