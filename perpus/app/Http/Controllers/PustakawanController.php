<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        $data = Librarian::all();

        if (count($data) == 0) {
            return response()->json([
                'message' => "Get All Resource",
                'status' => 204,
            ], 204);
        }

        return response()->json([
            'message' => "Get All Resource",
            'status' => 200,
            'data' => $data
        ], 200);
    }
    public function store(Request $request)
    {
        $created = Librarian::create([
            "nama" => $request->name,
            "gender" => $request->gender,
            "shift" => $request->shift,
        ]);
        return response()->json([
            "message" => "Resources created successfully",
            "status" => 201,
            'data' => $created
        ], 201);
    }

    public function show($id)
    {
        $librarian = Librarian::find($id);

        if (!$librarian) {
            return response()->json([
                'message' => "Resource Not Found",
                'status' => 404,
            ], 404);
        }
        return response()->json([
            'message' => "Get detail Resource",
            'status' => 200,
            'data' => $librarian
        ], 200);
    }
    public function update($id, Request $request)
    {
        $librarian = Librarian::find($id);

        if (!$librarian) {
            return response()->json([
                'message' => "Resource Not Found",
                'status' => 404,
            ], 404);
        }
        $updated = $librarian->update([
            "nama" => $request->name ?? $librarian->name,
            "gender" => $request->gender ?? $librarian->gender,
            "shift" => $request->shift ?? $librarian->shift,
        ]);

        if ($updated) {
            return response()->json([
                'message' => 'Date Updated Successfully',
                'status' => 200
            ], 200);
        }
    }
}
