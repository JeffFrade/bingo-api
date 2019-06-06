<?php

use Illuminate\Http\Request;

Route::get('/', 'BingoController@index')->name('bingo.index');
Route::delete('/', 'BingoController@delete')->name('bingo.delete');
