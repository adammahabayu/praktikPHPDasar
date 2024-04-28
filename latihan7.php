<?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . ", dan " . $namaBuah[2] . ". ";

// tampilkan Mangga
echo "Saya suka " . $namaBuah[1] . ". ";
// tampilkan Jeruk
echo "Saya suka " . $namaBuah[2] . ". ";
// tampilkan Apel
echo "Saya suka " . $namaBuah[3] . ". ";
// tampilkan Melon
echo "Saya suka " . $namaBuah[4] . ". ";

// array dengan spesifik index.
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"Tahun"); 
$umur['ahmad'] = "50 Tahun";
echo "Umur Andi adalah " . $umur['Andi'] . ". ";

//tampilkan semua umur
foreach ($umur as $nama => $umur) {
    echo "Umur $nama adalah $umur.<br>";
}
?>
