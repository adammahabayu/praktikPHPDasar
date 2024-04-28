<?php

// Jumlah uang yang diambil Ani dari Bank
$jumlah_uang = 1387500; // Rp. 1.387.500,-

// Array berisi nilai pecahan uang yang berlaku
$pecahan_uang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Inisialisasi array untuk menyimpan banyaknya masing-masing pecahan uang yang diperoleh Ani
$banyak_pecahan = array();

// Iterasi untuk menghitung banyaknya masing-masing pecahan uang
foreach ($pecahan_uang as $nilai) {
    // Hitung banyaknya pecahan uang tersebut yang diperlukan
    $jumlah_pecahan = intval($jumlah_uang / $nilai);
    // Simpan banyaknya pecahan uang tersebut
    $banyak_pecahan[$nilai] = $jumlah_pecahan;
    // Kurangi jumlah uang dengan nilai pecahan yang telah diproses
    $jumlah_uang %= $nilai;
}

// Tampilkan hasil
foreach ($banyak_pecahan as $nilai => $jumlah) {
    echo "Jumlah pecahan Rp. " . number_format($nilai, 0, ',', '.') . " : " . $jumlah . " lembar <br>";
}

?>
