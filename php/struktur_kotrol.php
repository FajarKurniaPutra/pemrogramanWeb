<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else {
    echo "Nilai huruf: D";
}
?>

<?php
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
?>

<?php
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br>Jumlah buah yang akan dipanen adalah: " . $jumlahBuah;
?>

<?php
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br>Total skor ujian adalah: " . $totalSkor;
?>

<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "<br>Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }
    echo "<br>Nilai: $nilai (Lulus)<br>";
}
?>

<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa); 
$nilaiSiswa = array_slice($nilaiSiswa, 2, -2); 
$totalNilai = array_sum($nilaiSiswa);

echo "<br>Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah adalah: " . $totalNilai;
?>

<?php
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "<br>Harga yang harus dibayar adalah: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
?>

<?php
$totalPoin = 600;
$hadiahTambahan = ($totalPoin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: " . $totalPoin . " poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
?>