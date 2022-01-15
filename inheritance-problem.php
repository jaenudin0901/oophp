<?php 

class Produk{
    public $judul, 
            $penulis ,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul ="judul" ,$penulis ="penulis", $penerbit  = "penerbit", $harga  = 0, $jmlHalaman = 0, $waktuMain= 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe =$tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->tipe}:{$this->judul} | {$this->getLabel()}(Rp.{$this->harga})"; 

        if($this->tipe == "Game"){
            $str .=  "{$this->JmlHalaman} Halaman.";
        } else if($this->tipe == "Game"){
            $str .=  "-{$this->watuMain} Jam.";
        }

        return $str;
    }

}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} Rp. {$produk->harga}";

        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto","Shonen Jump",30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Drukmen","Sony Computer",25000, 0, 500, "Game");

// Komik :Naruto | Masashi Kishimoto, Shonen Jump,(Rp. 30000)- 100 Halaman.
// Game : Uncarted | Neil Drukmen, Sony Computer, (Rp. 2500) -50 Jam
echo $produk1->getInfoLengkap();
echo"<br>";
echo $produk2->getInfoLengkap();
echo"<br>";
?>