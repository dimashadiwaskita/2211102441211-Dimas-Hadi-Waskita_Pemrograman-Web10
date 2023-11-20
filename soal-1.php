<?php

// Fungsi untuk menghitung saldo akhir
function hitungSaldoAkhir($saldoAwal, $jangkaWaktu)
{
    // Menentukan bunga berdasarkan besar saldo awal
    $bunga = ($saldoAwal < 1100000) ? 0.03 : 0.04;
    $biayaAdmin = 9000; // Biaya administrasi per bulan

    // Melakukan perulangan sebanyak jangka waktu
    for ($bulan = 1; $bulan <= $jangkaWaktu; $bulan++) {
        // Menambahkan bunga dan mengurangkan biaya administrasi dari saldo awal
        $saldoAwal += $saldoAwal * $bunga - $biayaAdmin;
    }

    // Mengembalikan nilai saldo akhir
    return $saldoAwal;
}

// Proses form jika data dikirimkan dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai saldoAwal dan jangkaWaktu dari formulir
    $saldoAwal = isset($_POST["saldoAwal"]) ? $_POST["saldoAwal"] : 0;
    $jangkaWaktu = isset($_POST["jangkaWaktu"]) ? $_POST["jangkaWaktu"] : 0;

    // Menghitung saldo akhir menggunakan fungsi hitungSaldoAkhir
    $saldoAkhir = hitungSaldoAkhir($saldoAwal, $jangkaWaktu);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Saldo Akhir</title>
</head>

<body>
    <h2>Hitung Saldo Akhir</h2>
    <!-- Form untuk mengisi saldoAwal dan jangkaWaktu -->
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Saldo Awal: <input type="number" name="saldoAwal" required><br>
        Jangka Waktu (bulan): <input type="number" name="jangkaWaktu" required><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    // Menampilkan hasil saldo akhir jika data dikirimkan dengan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Saldo Akhir setelah $jangkaWaktu bulan: Rp. " . number_format($saldoAkhir, 2, ",", ".") . "</h3>";
    }
    ?>
</body>

</html>
