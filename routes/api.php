<?php

use Illuminate\Http\Request;

Route::get('/', function () {
   return response()->json(['Hello World']);
});
