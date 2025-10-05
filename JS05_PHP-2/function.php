<?php
function perkenalan($nama, $salam="Assalamualaikum"){
	echo $salam.", ";
	echo "Perkenalkan, nama saya ".$nama."<br/>";
	echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Fajar", "Hallo");

echo "<hr>";

$saya = "Putra";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>