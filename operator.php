<?php
echo "<h1>Jobsheet 4 - Operator PHP</h1>";

// =================================
// 3.1 OPERATOR ARITMATIKA
// =================================

echo "<h2>3.1 Operator Aritmatika</h2>";

$a = 10;
$b = 5;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br>";

echo "Penjumlahan: " . ($a + $b) . "<br>";
echo "Pengurangan: " . ($a - $b) . "<br>";
echo "Perkalian: " . ($a * $b) . "<br>";
echo "Pembagian: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

// =================================
// 3.2 OPERATOR PEMBANDING
// =================================

echo "<hr>";
echo "<h2>3.2 Operator Pembanding</h2>";

echo "a == b : ";
var_dump($a == $b);

echo "<br>a != b : ";
var_dump($a != $b);

echo "<br>a > b : ";
var_dump($a > $b);

echo "<br>a < b : ";
var_dump($a < $b);

echo "<br>a >= b : ";
var_dump($a >= $b);

echo "<br>a <= b : ";
var_dump($a <= $b);

// =================================
// 3.3 OPERATOR LOGIKA
// =================================

echo "<hr>";
echo "<h2>3.3 Operator Logika</h2>";

$c = 3;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br>";
echo "Nilai c = $c <br><br>";

echo "a > b AND b > c : ";
var_dump($a > $b && $b > $c);

echo "<br>a < b AND b > c : ";
var_dump($a < $b && $b > $c);

echo "<br>a > b OR a < c : ";
var_dump($a > $b || $a < $c);

echo "<br>a < b OR b < c : ";
var_dump($a < $b || $b < $c);

echo "<br>NOT (a > b) : ";
var_dump(!($a > $b));

echo "<br>NOT (a < b) : ";
var_dump(!($a < $b));

// =================================
// 3.4 OPERATOR PENUGASAN
// =================================

echo "<hr>";
echo "<h2>3.4 Operator Penugasan</h2>";

$x = 10;

echo "Nilai awal x = $x <br>";

$x += 5;
echo "x += 5 : $x <br>";

$x -= 3;
echo "x -= 3 : $x <br>";

$x *= 2;
echo "x *= 2 : $x <br>";

$x /= 4;
echo "x /= 4 : $x <br>";

$x %= 3;
echo "x %= 3 : $x <br>";

// =================================
// 3.5 OPERATOR INCREMENT DAN DECREMENT
// =================================

echo "<hr>";
echo "<h2>3.5 Operator Increment dan Decrement</h2>";

$angka = 10;

echo "Nilai awal: $angka <br>";

$angka++;
echo "Setelah increment: $angka <br>";

$angka++;
echo "Increment lagi: $angka <br>";

$angka--;
echo "Setelah decrement: $angka <br>";

$angka--;
echo "Decrement lagi: $angka <br>";

// =================================
// 3.6 MENGHITUNG KURSI KOSONG
// =================================

echo "<hr>";
echo "<h2>3.6 Menghitung Kursi Kosong</h2>";

$total_kursi = 45;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;

$persentase_kosong =
    ($kursi_kosong / $total_kursi) * 100;

echo "Total kursi: $total_kursi <br>";
echo "Kursi terisi: $kursi_terisi <br>";
echo "Kursi kosong: $kursi_kosong <br>";

echo "Persentase kursi kosong: "
    . number_format($persentase_kosong, 2)
    . "%";
?>