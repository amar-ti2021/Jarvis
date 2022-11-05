<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        if (count($books) == 0) {
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
    public function store(Request $request)
    {
        $created = Book::create([
            "title" => $request->title,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "rating" => $request->rating,
            "published_date" => $request->published_date
        ]);
        return response()->json([
            "message" => "Resources created successfully",
            "status" => 201,
            'data' => $created
        ], 201);
    }

    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'message' => "Resource Not Found",
                'status' => 404,
            ], 404);
        }
        return response()->json([
            'message' => "Get detail Resource",
            'status' => 200,
            'data' => $book
        ], 200);
    }
}
