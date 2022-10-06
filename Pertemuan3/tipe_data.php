<?php
// String 
$nama = 'Aldi Mahardiansyah';

echo "Hello nama saya $nama";

echo "<br>";

echo str_replace("Aldi", "Andi", $nama);

echo "<br><br>";

// Integer 
$umur = 20;

echo $umur - 3 . "<br>";

var_dump($umur);

echo "<br><br>";

// Float 
$nilai = 3.72;

var_dump($nilai);

echo "<br><br>";

// Boolean 
$is_student = true;

var_dump($is_student);

echo "<br><br>";

// Array biasa 
$mahasiswa1 = ["Aldi", 20, 3.72, false];

var_dump($mahasiswa1);

echo "<br><br>";

echo "umur saya $mahasiswa[1]";

echo "<br><br>";

// Array Asosiatif  

$mahasiswa2 = [
    "nama" => "Aldi",
    "umur" => 20,
    "nilai" => 3.72,
    "is_active" => true
];
