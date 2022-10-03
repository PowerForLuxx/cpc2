<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function reg_page(){
        $reg = 'This is registration page';
        return view("reg",['reg'=>$reg]);
    }
}
