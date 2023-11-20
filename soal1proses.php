<html>
    <head>
        <title>Perhitungan Saldo Tabungan</title>
    </head>
    <body>
        <h1>Perhitungan Saldo Tabungan</h1>

        <?php
        $saldoAwal = $_POST['saldoawal'];
        $jangkaWaktu = $_POST['waktu'];
        $biayaAdministrasi = 9000;

        echo "<table>";
        echo "<tr><td>Saldo Awal</td><td>:</td><td>".$saldoAwal."</td></tr>";
        echo "<tr><td>Jangka Waktu Menabung</td><td>:</td><td>".$jangkaWaktu."</td></tr>";
        echo "</table>";

        for ($bulan = 1; $bulan <= $jangkaWaktu; $bulan++) {
            if ($saldoAwal < 1100000) {
                $bunga = $saldoAwal * 0.03;
            } else {
                $bunga = $saldoAwal * 0.04;
            }
        }

        $bungaTotal = $bunga * $jangkaWaktu;
        $totalAdmin = $biayaAdministrasi * $jangkaWaktu;
        $saldoAkhir = $saldoAwal + $bungaTotal - $totalAdmin;
        $saldoAwal = $saldoAkhir;
        
        echo "<br>";
        echo "Saldo Akhir setelah " . $jangkaWaktu . " bulan adalah: Rp. " .$saldoAkhir."-";
        ?>
    </body>
</html>