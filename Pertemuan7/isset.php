<?php
$umur = 21;
if(isset($umur) && $umur >= 18){
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}