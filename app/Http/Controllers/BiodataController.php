<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        $data = [
            "nama" => "Muhammad Amar Dafi",
            "gender" => "Laki-Laki",
            "is_student" => True,
            "asal_sekolah" => "Sekolah Tinggi Teknologi Terpadu Nurul Fikri",
            "umur" => "21 Tahun",
            "domisili" => "Depok"
        ];
        return response()->json($data);
    }
}
