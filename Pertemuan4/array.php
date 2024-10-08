<?php
// soal 5.1
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus);

// soal 5.2
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br><br>Daftar Karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(' , ',
$karyawanPengalamanLimaTahun);

// soal 5.3
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 93],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo "<br><br>Daftar nilai Mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

// soal 5.4
$nilaiMatematika = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
]; 
 $nilaiRata = array_sum(array_column($nilaiMatematika,1)) / count($nilaiMatematika);
 echo "<br><br>Nilai rata-rata: " . $nilaiRata;

 echo "<br>Daftar siswa yang lulus: <br>";
 foreach ($nilaiMatematika as $nilai) {
    if ($nilai[1] > $nilaiRata) {
        echo "Nama: {$nilai[0]} - Nilai: {$nilai[1]} <br>";
    }
 }
