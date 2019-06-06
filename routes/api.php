<?php

Route::get('/', 'BingoController@index')->name('bingo.index');
Route::get('/sorted', 'BingoController@sorted')->name('bingo.sorted');
Route::delete('/', 'BingoController@delete')->name('bingo.delete');
