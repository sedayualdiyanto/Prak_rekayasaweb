<?php
$data = [
    "nama" => "Sedayu Aldiyanto",
    "umur" => 20,
    "hobi" => ["Ngoding", "Gaming", "Olahraga"]
];

$jsonData = json_encode($data);

echo "Hasil encode JSON:<br>";
echo $jsonData;
?>
