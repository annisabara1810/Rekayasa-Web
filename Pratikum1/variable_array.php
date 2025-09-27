<?php
// 1. Buat variabel array lalu encode ke format JSON
$Buah = [
    "Apel" => 1,
    "Mangga" => 2,
    "Sirsak" => 3
];

// Encode array ke JSON
echo json_encode($Buah);
echo "<br>";

// 2. Buat variabel JSON
$Data = '{
    "buah1": "apel",
    "buah2": "mangga",
    "buah3": "sirsak"
}';

// Decode ke PHP Object`
$obj = json_decode($Data);

// Decode ke PHP Array (parameter kedua = true)
$arr = json_decode($Data, true);

// Akses nilai dari PHP Object
echo "=== PHP Object ===<br>";
echo "Buah1: " . $obj->buah1 . "<br>";
echo "Buah2: " . $obj->buah2 . "<br>";
echo "Buah3: " . $obj->buah3 . "<br>";

// Akses nilai dari PHP Array
echo "<br>=== PHP Array ===<br>";
echo "Buah1: " . $arr['buah1'] . "<br>";
echo "Buah2: " . $arr['buah2'] . "<br>";
echo "Buah3: " . $arr['buah3'] . "<br>";
?>
