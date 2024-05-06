<?php 

class Produk {
    public  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct() {
        echo "HelloWorld";
    }

    public function getLabel () {
        return "$this->judul, $this->penerbit";
    }

}

$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Masashi";
$produk3 -> penerbit = "Bandai";
$produk3 -> harga = 100;

$produk4 = new Produk();
$produk4 -> judul = "Bokuno";
$produk4 -> penulis = "Kishimoto";
$produk4 -> penerbit = "Xero";
$produk4 -> harga = 100;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>