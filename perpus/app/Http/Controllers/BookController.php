<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();

        if(count($books) == 0){
            return response()->json([
                'message' => "Get All Resource",
                'status' => 204,
            ], 204);
        }

        return response()->json([
            'message' => "Get All Resource",
            'status' => 200,
            'data' => $books
        ], 200);
    }
}
