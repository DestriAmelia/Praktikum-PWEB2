<?php
# membuat kelas dan objek
    // 1. membuat kelas mahasiswa
 class Mahasiswa {
    // definisi atribut atau properti
    public $nama;
    public $nim;
    public $jurusan;

    // definisi metode atau function
  public function tampilData() {
    return "Mahasiswa dengan nama: $this->nama.<br>  nim: $this->nim.<br> jurusan: $this->jurusan.<br>";
  }

    // 2. implementasi constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } 
       
    // 3. membuat metode tambahan update jurusan
    public function updateJurusan($jurusanbaru) {
        $this->jurusan = $jurusanbaru;
    }

    // 4. penggunaan atribut dan metode (metode setter untuk mengubah nim)
    public function setNim($nimbaru) {
        $this->nim = $nimbaru;
    }
 }

    // intasiasi objek
    $mahasiswa1 = new Mahasiswa("liamela", "230202078", "Komputer dan Bisnis");
    echo $mahasiswa1->tampilData();

    // mengubah jurusan 
    $mahasiswa1->updateJurusan("Rekayasa Mesin dan Pertanian");
    echo "<br>";

    // mengubah nim
    $mahasiswa1->setNim("230202079");
    echo "<br>";

    // menampilkan data yang sudah diperbarui
    echo $mahasiswa1->tampilData();
    ?>