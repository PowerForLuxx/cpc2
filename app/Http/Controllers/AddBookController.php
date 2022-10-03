<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function add_book(){

        $addB = 'This is add book page';
        return view("addB",['addB'=>$addB]);
    }
}
