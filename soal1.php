<?php

// Gaji pokok dan tunjangan jabatan Obi
$gaji_pokok = 3250000; // Rp. 3.250.000,-
$tunjangan_jabatan = 1200000; // Rp. 1.200.000,-

// Hitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Hitung pajak penghasilan (10% dari gaji kotor)
$pajak_penghasilan = 0.1 * $gaji_kotor;

// Hitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak_penghasilan;

// Tampilkan hasil
echo "Gaji kotor Obi: Rp. " . number_format($gaji_kotor, 2, ',', '.') . "<br>";
echo "Pajak penghasilan: Rp. " . number_format($pajak_penghasilan, 2, ',', '.') . "<br>";
echo "Gaji bersih Obi: Rp. " . number_format($gaji_bersih, 2, ',', '.');

?>
