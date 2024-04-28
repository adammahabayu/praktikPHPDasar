<?php

// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

// menampilkan data array 
print_r($array);
echo "<br>";

// menampilkan kelas 1C 
print_r($array['1C']);
echo "<br>";

// menampilkan kelas 1d dengan index 0 
if (isset($array['1D'][0])) {
    echo $array['1D'][0];
} else {
    echo "Tidak ada data untuk kelas 1D dengan indeks 0.";
}
echo "<br>";

// tampilkan fajri
if (isset($array['1D'][1])) {
    echo $array['1D'][1];
} else {
    echo "Tidak ada data untuk nama Fajri.";
}
echo "<br>";

// tampilkan andi
if (isset($array['1C'][0])) {
    echo $array['1C'][0];
} else {
    echo "Tidak ada data untuk nama Andi.";
}
echo "<br>";

// data kelas bisa ditulis juga dengan 
$array_simple = [ 
    "1C" => ["udin", "ismail", "adi"], 
    "1D" => ["lukman", "fajri", "mahmud"]
];

?>
