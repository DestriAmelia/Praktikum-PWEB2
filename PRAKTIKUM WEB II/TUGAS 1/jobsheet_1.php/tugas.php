<?php
# membuat kelas dan objek
    // 1. membuat kelas dosen
 class Dosen {
    // definisi atribut atau properti
    public $nama;
    public $nip;
    public $matkul;

    // definisi metode atau function
  public function tampilDosen() {
    return "Dosen dengan nama: $this->nama.<br>  nip: $this->nip.<br> mata kuliah: $this->matkul.<br>";
  }

    // 2. implementasi constructor
    public function __construct($nama, $nip, $matkul) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matkul = $matkul;
    } 
 }

    // 3. intasiasi objek
    $dosen1 = new Dosen("liamela", "230202078", "PRAKTIKUM WEB II");
    echo $dosen1->tampilDosen();
    ?>