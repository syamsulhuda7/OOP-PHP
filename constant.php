<?php

define('NAME', 'Syamsul'); // constanta global, tidak bisa di dalam kelas
const NAMA = 'Syamsul'; // Bisa dimasukkan ke dalam class
const UMUR = 23;

class Coba {
    const NAMA = 'Syamsul Huda';
}

echo Coba::NAMA;

echo "<br>";
echo NAMA;
echo "<br>";
echo UMUR;
echo "<br>";

echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
echo "<br>";
?>