<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

// while
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br><br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

// for
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

//foreach
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "<br><br>Total skor ujian adalah: $totalSkor<br><br>";

// foreach, if
$nilaiSiswa1 = [85,92,58,64,90,55,88,79,70,96];

foreach ($nilaiSiswa1 as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}

// soal cerita
$nilaiSiswa2 = [85,92,78,64,90,75,88,79,70,96];
for ($i = 0; $i < 2; $i++) {

    $nilaiTertinggi = max($nilaiSiswa2);
    $indexTertinggi = array_search($nilaiTertinggi, $nilaiSiswa2);
    unset($nilaiSiswa2[$indexTertinggi]);

 
    $nilaiTerendah = min($nilaiSiswa2);
    $indexTerendah = array_search($nilaiTerendah, $nilaiSiswa2);
    unset($nilaiSiswa2[$indexTerendah]);
}

$totalNilai = array_sum($nilaiSiswa2);
$rataRata = $totalNilai  / (count($nilaiSiswa2));

echo "<br>Nilai yang digunakan: " . implode(", ", $nilaiSiswa2) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai";
echo "<br>Rata-rata nilai Siswa {$rataRata}";

// soal 4.7
$hargaBeli = 120.000;
$diskon = 20;

    if ($hargaBeli > 100.000) {
        $hargaDiskon = $hargaBeli * ($diskon/100);
        $hargaJadi = $hargaBeli - $hargaDiskon;
    } else {
        $hargaBeli;
    }

    echo "<br><br>Harga yang harus dibayar Setelah diskon adalah: Rp{$hargaJadi}.000<br>";

?>


