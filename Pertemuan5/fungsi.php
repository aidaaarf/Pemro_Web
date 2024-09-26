<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan("Aida","Hallo");
echo "<hr>";
$saya = "Aida";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>