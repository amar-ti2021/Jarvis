<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

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

    public function update($id, Request $request)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json([
                'message' => "Resource Not Found",
                'status' => 404,
            ], 404);
        }
        $updated = $book->update([
            'title' => $request->title ?? $book->title,
            'author' => $request->author ?? $book->title,
            'rating' => $request->rating ?? $book->rating,
            'publisher' => $request->publisher ?? $book->publisher,
            'published_date' => $request->published_date ?? $book->published_date
        ]);

        if ($updated) {
            return response()->json([
                'message' => 'Date Updated Successfully',
                'status' => 200
            ], 200);
        }
    }
    function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'message' => "Resource Not Found",
                'status' => 404,
            ], 404);
        }

        $deleted = $book->delete();

        if ($deleted) {
            return response()->json([
                'messsage' => "Resource deleted successfully",
                'status' => 200
            ], 200);
        }
    }

    function search($title)
    {
        $books = Book::where('title', 'like', $title . "%")->get();

        if (count($books)) {
            return response()->json([
                'message' => "Resource Empty",
                'status' => 204,
            ], 200);
        }
        return response()->json([
            'message' => "Resource searched successfully",
            'data' => $books,
            'status' => 200,
        ], 200);
    }
}
