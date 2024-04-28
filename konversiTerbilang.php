<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Angka ke Terbilang</title>
</head>
<body>
    <h2>Konversi Angka ke Terbilang</h2>

    <form method="POST">
        Masukkan angka (1-9):
        <input type="text" name="angka" maxlength="1">
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai angka dari form
        $angka = $_POST["angka"];

        // Konversi angka menjadi terbilang
        switch ($angka) {
            case '1':
                $terbilang = "satu";
                break;
            case '2':
                $terbilang = "dua";
                break;
            case '3':
                $terbilang = "tiga";
                break;
            case '4':
                $terbilang = "empat";
                break;
            case '5':
                $terbilang = "lima";
                break;
            case '6':
                $terbilang = "enam";
                break;
            case '7':
                $terbilang = "tujuh";
                break;
            case '8':
                $terbilang = "delapan";
                break;
            case '9':
                $terbilang = "sembilan";
                break;
            default:
                $terbilang = "Angka tidak valid";
                break;
        }

        // Menampilkan hasil konversi
        echo "<p>Angka $angka dalam terbilang adalah: $terbilang</p>";
    }
    ?>

</body>
</html>
