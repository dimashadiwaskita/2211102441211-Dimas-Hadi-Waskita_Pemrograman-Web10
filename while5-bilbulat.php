<?php
$jumlah = 0; // Inisialisasi variabel jumlah dengan nilai 0
$bil = 2; // Inisialisasi variabel bil dengan nilai 2

while ($bil <= 50) {
    $jumlah = $jumlah + $bil; // Menambahkan nilai $bil ke variabel $jumlah
    $bil++; // Meningkatkan nilai $bil setiap iterasi
}

echo "Hasilnya adalah ".$jumlah; // Menampilkan hasil penjumlahan

?>