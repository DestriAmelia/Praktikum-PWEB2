<?php
// kelas pengguna
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// kelas dosen yang mewarisi  kelas penggunna
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    public function tampilkanData() {
        echo "Nama: ". $this->getNama()."<br>";
        echo "Mata Kuliah: ". $this->getMataKuliah()."<br>";
    }
}

// instansi objek dosen dan manampilkan data
$dosen1 = new Dosen ("Dr. Amelia", "Pemograman Web");
$dosen1->tampilkanData();
?>