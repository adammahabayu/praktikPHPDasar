<?php

// Array yang menyimpan data siswa
$siswa = array(
    array("No. Urut" => 1, "Poin" => 75, "Nama" => "Adi"),
    array("No. Urut" => 2, "Poin" => 80, "Nama" => "Joni"),
    array("No. Urut" => 3, "Poin" => 65, "Nama" => "Jihan"),
    array("No. Urut" => 4, "Poin" => 70, "Nama" => "Aya"),
    array("No. Urut" => 5, "Poin" => 85, "Nama" => "Ita"),
    array("No. Urut" => 6, "Poin" => 90, "Nama" => "Budi"),
    array("No. Urut" => 7, "Poin" => 95, "Nama" => "Tini"),
    array("No. Urut" => 8, "Poin" => 65, "Nama" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
foreach ($siswa as $data) {
    if ($data["No. Urut"] == 5) {
        echo "a) Poin siswa dengan nomor urut 5: " . $data["Poin"] . "<br>";
        break; // Keluar dari perulangan setelah menemukan nomor urut 5
    }
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "b) Nama siswa yang memiliki poin 90:<br>";
foreach ($siswa as $data) {
    if ($data["Poin"] == 90) {
        echo $data["Nama"] . "<br>";
    }
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
$ada_poin_100 = false;
foreach ($siswa as $data) {
    if ($data["Poin"] == 100) {
        $ada_poin_100 = true;
        break; // Keluar dari perulangan jika ada siswa dengan poin 100
    }
}

if (!$ada_poin_100) {
    echo "c) Tidak ada siswa yang memiliki poin 100<br>";
}

?>
