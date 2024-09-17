<?php
# 1. Membuat Class dan Object
    // kelas mahasiswa
class Mahasiswa{
    // atribut public
    public $nama;
    public $nim;
    public $jurusan;

    // constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // metode untuk menampilkan data mahasiswa
    public function tampilData() {
       return "Mahasiswa dengan nama: $this->nama.<br>  nim: $this->nim.<br> jurusan: $this->jurusan.<br>";
    }
   }

    // intansiasi objek dari class mahasiswa dan menampilkan data tersebut
    $mahasiswa1 = new Mahasiswa ("liamela", "230202078", "Komputer dan Bisnis");
    echo $mahasiswa1->tampilData();
?>
