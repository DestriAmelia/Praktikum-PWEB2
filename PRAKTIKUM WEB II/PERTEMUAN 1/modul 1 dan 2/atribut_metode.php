<?php
// Menambahkan Atribut dan Metode
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkaninfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}

$buku1 = new Buku("Pemograman PHP", "John Doe");
echo $buku1->tampilkaninfo();
?>