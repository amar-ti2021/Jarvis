<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index(){
        $data = Librarian::all();
        
        if(count($data) == 0){
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
}
