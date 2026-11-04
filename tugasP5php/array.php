
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jobsheet PHP - Array</title>
</head>
<body>

<?php

// =====================================
// 5.1 ARRAY SATU DIMENSI
// =====================================

echo "<h2>5.1 - Array Satu Dimensi</h2>";

$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: ";
echo implode(", ", $nilaiLulus);


// =====================================
// 5.2 ARRAY DUA DIMENSI
// =====================================

echo "<hr>";
echo "<h2>5.2 - Array Dua Dimensi</h2>";

$daftarKaryawan = [
    ["Alice", 7],
    ["Bob", 3],
    ["Charlie", 9],
    ["David", 5],
    ["Eva", 6]
];

echo "Karyawan dengan pengalaman lebih dari 5 tahun:<br>";

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        echo "Nama: " . $karyawan[0];
        echo ", Pengalaman: " . $karyawan[1] . " tahun<br>";
    }
}


// =====================================
// 5.3 ARRAY MULTIDIMENSI
// =====================================

echo "<hr>";
echo "<h2>5.3 - Array Multidimensi</h2>";

$daftarNilai = [
    "Matematika" => [
        ["Alice", 85],
        ["Bob", 92],
        ["Charlie", 78]
    ],

    "Fisika" => [
        ["Alice", 90],
        ["Bob", 88],
        ["Charlie", 75]
    ],

    "Kimia" => [
        ["Alice", 92],
        ["Bob", 80],
        ["Charlie", 85]
    ]
];

$mataKuliah = "Fisika";

echo "Daftar nilai mahasiswa mata kuliah $mataKuliah:<br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: " . $nilai[0];
    echo ", Nilai: " . $nilai[1] . "<br>";
}


// =====================================
// 5.4 ARRAY DUA DIMENSI
// NILAI SISWA DI ATAS RATA-RATA
// =====================================

echo "<hr>";
echo "<h2>5.4 - Nilai Siswa di Atas Rata-rata</h2>";

$daftarSiswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

// Menghitung total nilai
$totalNilai = 0;

foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

// Menghitung rata-rata
$jumlahSiswa = count($daftarSiswa);
$rataRata = $totalNilai / $jumlahSiswa;

echo "Total nilai: $totalNilai<br>";
echo "Jumlah siswa: $jumlahSiswa<br>";
echo "Rata-rata kelas: $rataRata<br><br>";

echo "<b>Siswa dengan nilai di atas rata-rata:</b><br>";

foreach ($daftarSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: " . $siswa[0];
        echo ", Nilai: " . $siswa[1] . "<br>";
    }
}

?>

</body>
</html>
