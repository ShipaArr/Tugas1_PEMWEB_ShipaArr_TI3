<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Aritmatika</title>
</head>
<body>
    <h2>Kalkulator Aritmatika</h2>

    <!-- Form input angka dan operasi -->
    <form method="post" action="">
        <label>Angka Pertama:</label><br>
        <input type="number" name="angka1" required><br><br>

        <label>Angka Kedua:</label><br>
        <input type="number" name="angka2" required><br><br>

        <label>Operasi:</label><br>
        <select name="operasi">
            <option value="tambah">Penjumlahan (+)</option>
            <option value="kurang">Pengurangan (-)</option>
            <option value="kali">Perkalian (×)</option>
            <option value="bagi">Pembagian (/)</option>
        </select><br><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <!-- Proses perhitungan dengan PHP -->
    <?php
    if (isset($_POST['submit'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = "";

        // Validasi input harus angka
        if (is_numeric($angka1) && is_numeric($angka2)) {
            if ($operasi == "tambah") {
                $hasil = $angka1 + $angka2;
            } elseif ($operasi == "kurang") {
                $hasil = $angka1 - $angka2;
            } elseif ($operasi == "kali") {
                $hasil = $angka1 * $angka2;
            } elseif ($operasi == "bagi") {
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Error: Tidak bisa membagi dengan nol!";
                }
            }

            echo "<h3>Hasil: $hasil</h3>";
        } else {
            echo "<h3>Input harus berupa angka!</h3>";
        }
    }
    ?>
</body>
</html>
