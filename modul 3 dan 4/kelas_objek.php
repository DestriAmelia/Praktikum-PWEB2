<?php
// Menambahkan Atribut dan Metode
class Buku {
    // atribut atau properties
    public $judul;
    public $penulis;

    //constructor
    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    
    // metode atau function
    public function tampilkaninfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}

// intansiasi objek 
$buku1 = new Buku("Pemograman PHP", "John Doe");
echo $buku1->tampilkaninfo();
?>