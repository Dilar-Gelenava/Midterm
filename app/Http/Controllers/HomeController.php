<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;


class HomeController extends Controller
{


    public function home()
    {
    	$books = Books::all();
    	return view("home", [
    		'books' => $books,
    	]);
    }
}
