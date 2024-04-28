<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h2>Konversi Nilai</h2>
    <form action="" method="post">
        <label for="nilai">Masukkan Nilai:</label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit" name="submit">Konversi</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];

        // Mengkonversi nilai angka menjadi huruf berdasarkan aturan
        if ($nilai >= 90 && $nilai <= 100) {
            $nilaiHuruf = 'A';
        } elseif ($nilai >= 80 && $nilai <= 89) {
            $nilaiHuruf = 'AB';
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $nilaiHuruf = 'B';
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $nilaiHuruf = 'BC';
        } elseif ($nilai >= 0 && $nilai <= 59) {
            $nilaiHuruf = 'C';
        } else {
            $nilaiHuruf = 'Nilai tidak valid';
        }

        echo "<p>Nilai angka $nilai setara dengan nilai huruf: $nilaiHuruf</p>";
    }
    ?>
</body>
</html>
