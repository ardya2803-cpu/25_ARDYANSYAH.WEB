<?php

echo "<h2>JOBSHEET 4 - STRUKTUR KONTROL PHP</h2>";
echo "<hr>";


// ========================================
// 4.1 - MENENTUKAN NILAI HURUF
// ========================================

echo "<h3>4.1 - Menentukan Nilai Huruf</h3>";

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai numerik: $nilaiNumerik<br>";
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai numerik: $nilaiNumerik<br>";
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai numerik: $nilaiNumerik<br>";
    echo "Nilai huruf: C";
} else {
    echo "Nilai numerik: $nilaiNumerik<br>";
    echo "Nilai huruf: D";
}

echo "<hr>";


// ========================================
// 4.2 - PERULANGAN WHILE
// ========================================

echo "<h3>4.2 - Perulangan While</h3>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Jarak target: $jarakTarget kilometer<br>";
echo "Jarak yang ditempuh: $jarakSaatIni kilometer<br>";
echo "Jumlah hari: $hari hari";

echo "<hr>";


// ========================================
// 4.3 - PERULANGAN FOR
// ========================================

echo "<h3>4.3 - Perulangan For</h3>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += $tanamanPerLahan * $buahPerTanaman;
}

echo "Jumlah lahan: $jumlahLahan<br>";
echo "Tanaman per lahan: $tanamanPerLahan<br>";
echo "Buah per tanaman: $buahPerTanaman<br>";
echo "Jumlah buah yang akan dipanen: $jumlahBuah";

echo "<hr>";


// ========================================
// 4.4 - PERULANGAN FOREACH
// ========================================

echo "<h3>4.4 - Perulangan Foreach</h3>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Daftar skor ujian: ";

foreach ($skorUjian as $skor) {
    echo "$skor ";
}

echo "<br>";
echo "Total skor ujian: $totalSkor";

echo "<hr>";


// ========================================
// 4.5 - PENGGUNAAN CONTINUE
// ========================================

echo "<h3>4.5 - Penggunaan Continue</h3>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }

    echo "Nilai: $nilai (Lulus)<br>";
}

echo "<hr>";


// ========================================
// 4.6 - RATA-RATA NILAI SISWA
// ========================================

echo "<h3>4.6 - Menghitung Rata-rata Nilai</h3>";

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);

$jumlahData = count($nilai);
$totalNilai = 0;

for ($i = 2; $i < $jumlahData - 2; $i++) {
    $totalNilai += $nilai[$i];
}

$jumlahNilaiDihitung = $jumlahData - 4;
$rataRata = $totalNilai / $jumlahNilaiDihitung;

echo "Nilai setelah diurutkan: ";

foreach ($nilai as $data) {
    echo "$data ";
}

echo "<br>";
echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 terendah: $totalNilai<br>";
echo "Rata-rata nilai: " . number_format($rataRata, 2);

echo "<hr>";


// ========================================
// 4.7 - MENGHITUNG DISKON
// ========================================

echo "<h3>4.7 - Menghitung Diskon</h3>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 20;
}

$jumlahDiskon = $hargaProduk * ($diskon / 100);
$totalBayar = $hargaProduk - $jumlahDiskon;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: $diskon%<br>";
echo "Potongan harga: Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar: Rp " . number_format($totalBayar, 0, ',', '.');

echo "<hr>";


// ========================================
// 4.8 - OPERATOR TERNARY
// ========================================

echo "<h3>4.8 - Operator Ternary</h3>";

$poin = 650;

$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";

?>