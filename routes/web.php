<?php

use Illuminate\Support\Facades\Route;
Route::get('/','MainController@mainpage');

Route::get('/addbook','AddBookController@add_book');

Route::get('/booklist','BookController@index');

Route::get('/userlist','UserController@user_page');

Route::get('/reg','RegistrationController@reg_page');

Route::get('/log','LoginController@log_page');


