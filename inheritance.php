<?php 

class Produk {
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $waktuMain=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel () {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk () {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

}

class Komik extends Produk {
    public function getInfoKomik(){
        $str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoGame(){
        $str = "Game : {$this->getInfoProduk()} ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$komik = new Komik("Naruto", "Masashi", "Bandai", 1000, 100, 0, 'Komik');
$game = new Game("Bokuno", "Kishimoto", "Xero", 2000, 0, 50, 'Game');

echo $komik->getInfoKomik();
echo "<br>";
echo "<br>";
echo $game->getInfoGame();

?>