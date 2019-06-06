<?php

Route::get('/sort', 'BingoController@index')->name('bingo.index');
Route::get('/sorted', 'BingoController@sorted')->name('bingo.sorted');
Route::delete('/delete', 'BingoController@delete')->name('bingo.delete');
