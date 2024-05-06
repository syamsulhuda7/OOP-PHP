<?php 

class Produk {
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel () {
        return "$this->judul, $this->penerbit";
    }

}

$produk1 = new Produk("Naruto", "Masashi", "Bandai", 1000);
$produk2 = new Produk("Bokuno", "Kishimoto", "Xero", 2000);
$produk3 = new Produk("Dragonball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk3->getLabel();

?>