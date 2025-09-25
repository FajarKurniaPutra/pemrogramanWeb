<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah: " . $hasilTambah . "<br>";
echo "Hasil kurang: " . $hasilKurang . "<br>";
echo "Hasil kali: " . $hasilKali . "<br>";
echo "Hasil bagi: " . $hasilBagi . "<br>";
echo "Sisa bagi: " . $sisaBagi . "<br>";
echo "Pangkat: " . $pangkat . "<br>";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama: " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil tidak sama: " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil lebih kecil: " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil lebih besar: " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil lebih kecil sama: " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil lebih besar sama: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

$hasilAnd = $a && $b; 
$hasilOr = $a || $b;  
$hasilNotA = !$a;    
$hasilNotB = !$b;    

echo "<br> Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "<br>";

echo "<br>";

$a += $b;
echo "Nilai a setelah ditambah b: " . $a . "<br>";

$a -= $b; 
echo "Nilai a setelah dikurangi b: " . $a . "<br>";

$a *= $b; 
echo "Nilai a setelah dikali b: " . $a . "<br>";

$a /= $b; 
echo "Nilai a setelah dibagi b: " . $a . "<br>";

$a %= $b; 
echo "Nilai a setelah sisa bagi b: " . $a . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>Apakah \$a dan \$b identik (nilai dan tipe data sama)? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah \$a dan \$b tidak identik (nilai atau tipe data beda)? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>

<?php
$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "<br>Jumlah kursi yang kosong adalah: " . $kursiKosong . "<br>";
echo "Persentase kursi yang masih kosong adalah: " . number_format($persentaseKursiKosong, 2) . "%";

?>