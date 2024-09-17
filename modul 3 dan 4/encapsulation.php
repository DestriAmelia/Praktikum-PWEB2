<?php
// Menambahkan Atribut dan Metode
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

$buku1 = new Buku("Pemograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); //output: Pemograman PHP
?>