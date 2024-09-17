<?php
# 2. Encapsulation
    // kelas mahasiswa 
    class Mahasiswa{
    // atribut private
    private $nama;
    private $nim;
    private $jurusan;

    // constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // setter untuk nama
    public function setNama() {
        $this->nama;
    }

    // getter untuk nim
    public function getNim() {
        return $this->nim;
    }

    // setter untuk nim
    public function setNim() {
        $this->nim;
    }

     // getter untuk jurusan
     public function getJurusan() {
        return $this->jurusan;
    }

    // setter untuk jurusan
    public function setJurusan() {
        $this->jurusan;
    }

    // metode untuk menampilkan data
    public function tampilData() {
        return "Mahasiswa dengan nama: $this->nama.<br>  nim: $this->nim.<br> jurusan: $this->jurusan.<br>";
     }
    }

    // intansiasi objek dari class mahasiswa dan menampilkan data tersebut
    $mahasiswa1 = new Mahasiswa ("liamela", "230202078", "Komputer dan Bisnis");
    echo $mahasiswa1->tampilData();
    echo $mahasiswa1->setNama("lya");
    echo $mahasiswa1->setJurusan("Rekayasa Mesin dan Pertanian");
    echo $mahasiswa1->tampilData();
?>
 