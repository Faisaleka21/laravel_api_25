<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Books::with('author')->get();
        return response()->json($books);
    }
}
