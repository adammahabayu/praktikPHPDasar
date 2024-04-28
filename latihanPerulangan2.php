<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Ganjil atau Genap</title>
</head>
<body>
    <h2>Menampilkan Ganjil atau Genap</h2>

    <?php
    // Array angka
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    // Perulangan untuk menampilkan setiap nilai dalam array
    foreach ($angka as $nilai) {
        // Memeriksa apakah nilai tersebut ganjil atau genap
        if ($nilai % 2 == 0) {
            echo "Nomor: $nilai Ganjil<br>";
        } else {
            echo "Nomor: $nilai Genap<br>";
        }
    }
    ?>

</body>
</html>
