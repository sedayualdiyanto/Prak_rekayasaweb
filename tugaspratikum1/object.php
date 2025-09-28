<?php
// Variabel JSON
$jsonString = '{"nama":"Sedayu","umur":20,"hobi":["Sepak bola","Berenang"]}';

// Decode ke PHP Object (default)
$obj = json_decode($jsonString);

// Decode ke PHP Array (parameter kedua = true)
$arr = json_decode($jsonString, true);

echo "<br><br>=== Akses dari PHP Object ===<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi pertama: " . $obj->hobi[0] . "<br>";

echo "<br>=== Akses dari PHP Array ===<br>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "Umur: " . $arr["umur"] . "<br>";
echo "Hobi pertama: " . $arr["hobi"][0] . "<br>";
?>
