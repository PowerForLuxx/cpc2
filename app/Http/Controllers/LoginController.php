<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function log_page(){

    $log = 'This is login page';
       return view("login",['login'=>$log]);
    }
}
