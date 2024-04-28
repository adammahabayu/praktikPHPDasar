<?php
// Menyimpan nama-nama hari dalam array
$days = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

// Menampilkan nama-nama hari menggunakan loop foreach
foreach ($days as $index => $day) {
    echo "Hari ke-" . ($index + 1) . " adalah " . $day . "<br>";
}
?>