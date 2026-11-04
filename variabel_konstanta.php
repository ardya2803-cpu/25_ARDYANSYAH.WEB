<?php
echo "<h2>Praktikum 1: Variabel dan Konstanta</h2>";

// Contoh variabel angka
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;

echo "<h3>Penggunaan Variabel Angka</h3>";
echo "Angka pertama: $angka1 <br>";
echo "Angka kedua: $angka2 <br>";
echo "Hasil penjumlahan: $hasil <br><br>";

// Contoh variabel boolean
$benar = true;
$salah = false;

echo "<h3>Penggunaan Variabel Boolean</h3>";
echo "Variabel benar: ";
var_dump($benar);

echo "<br>Variabel salah: ";
var_dump($salah);

echo "<br><br>";

// Contoh konstanta
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "<h3>Penggunaan Konstanta</h3>";
echo "Selamat datang di " . NAMA_SITUS;
echo ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN;
?>