<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_page(){
        $user = 'This is Users list page';
        return view("users",['users'=>$user]);
    }
}
