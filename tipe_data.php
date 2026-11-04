<?php
echo "<h2>Praktikum 2: Tipe Data PHP</h2>";

// Contoh variabel dan perhitungan
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "<h3>1. Integer dan Perhitungan</h3>";
echo "Variabel a: $a <br>";
echo "Variabel b: $b <br>";
echo "Variabel c: $c <br>";
echo "Variabel d: $d <br>";
echo "Variabel e: $e <br>";
echo "Tipe data e: ";
var_dump($e);

echo "<br><br>";

// Contoh perhitungan rata-rata nilai
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = (
    $nilaiMatematika +
    $nilaiIPA +
    $nilaiBahasaIndonesia
) / 3;

echo "<h3>2. Tipe Data Float</h3>";
echo "Matematika: $nilaiMatematika <br>";
echo "IPA: $nilaiIPA <br>";
echo "Bahasa Indonesia: $nilaiBahasaIndonesia <br>";
echo "Rata-rata: " . number_format($rataRata, 2) . "<br>";
echo "Tipe data rata-rata: ";
var_dump($rataRata);

echo "<br><br>";

// Contoh boolean
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "<h3>3. Tipe Data Boolean</h3>";
echo "Apakah siswa lulus: ";
var_dump($apakahSiswaLulus);

echo "<br>Apakah siswa sudah ujian: ";
var_dump($apakahSiswaSudahUjian);

echo "<br><br>";

// Contoh string
$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . " " . $namaBelakang;

echo "<h3>4. Tipe Data String</h3>";
echo "Nama depan: $namaDepan <br>";
echo "Nama belakang: $namaBelakang <br>";
echo "Nama lengkap: $namaLengkap <br>";
echo "Nama lengkap dengan operator titik: $namaLengkap2 <br>";

echo "<br>";

// Contoh array
$listMahasiswa = [
    "Wahid Abdullah",
    "Elmo Bachtiar",
    "Lendis Fabri"
];

echo "<h3>5. Tipe Data Array</h3>";
echo "Mahasiswa pertama: " . $listMahasiswa[0] . "<br>";

echo "Daftar mahasiswa: <br>";
foreach ($listMahasiswa as $mahasiswa) {
    echo "- $mahasiswa <br>";
}
?>