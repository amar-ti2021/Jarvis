<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index(){
        $data = [
            'nama' => 'Amar',
            'gender' => 'L',
            'shift' => 'malam'
        ];
        return response()->json($data);
    }
}
