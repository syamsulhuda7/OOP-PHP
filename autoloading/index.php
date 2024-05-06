<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi", "Bandai", 15000, 100);
$produk2 = new Game("Bokuno", "Kishimoto", "Xero", 25000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();