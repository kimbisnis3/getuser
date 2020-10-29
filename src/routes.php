<?php

Route::get('userall', 'Edopratama\Getuser\GetuserController@getListUser');
Route::get('user/{id}', 'Edopratama\Getuser\GetuserController@getUser');
