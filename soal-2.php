<?php
// Inisialisasi variabel jumlahPenyelesaian
$jumlahPenyelesaian = 0;

// Loop untuk nilai x
for ($x = 1; $x <= 25; $x++) {
    // Loop untuk nilai y
    for ($y = 1; $y <= 25; $y++) {
        // Menghitung nilai z
        $z = 25 - $x - $y;

        // Memeriksa apakah nilai z positif dan kurang dari atau sama dengan 25
        if ($z > 0 && $z <= 25) {
            // Menampilkan pasangan nilai x, y, dan z
            echo "x = $x, y = $y, z = $z<br>";
            
            // Menambah jumlah penyelesaian
            $jumlahPenyelesaian++;
        }
    }
}

// Menampilkan jumlah penyelesaian
echo "<br>Jumlah penyelesaian: $jumlahPenyelesaian";
?>
