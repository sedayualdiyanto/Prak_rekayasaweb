<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h3 {
            background-color: yellow;
            padding: 10px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
            text-align: center;
        }
        td {
            text-transform: uppercase;
            padding: 8px;
        }
    </style>
</head>
<body>
<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/praktikum2/getWisata.php");
$data = json_decode($send, true);

echo "<table>";
echo "<tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row['kota']."</td>";
    echo "<td>".$row['landmark']."</td>";
    echo "<td>".$row['tarif']."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>