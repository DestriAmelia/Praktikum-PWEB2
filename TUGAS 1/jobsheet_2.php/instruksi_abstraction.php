<?php
// kelas abstrak pengguna
abstract class pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function aksesFitur();
}

// kelas mahasiswa yang mengimplementasikan kelas pengguna
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo $this->nama . "Menggakses fitur Mahasiswa: Mengikuti kelas online.<br>";
    }
}

// kelas dosen yang mengimplementasikan kelas pengguna
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo $this->nama . "Menggakses fitur Dosen: Menyediakan materi kuliah.<br>";
    }
}

// instansiasi objek mahasiswa dan dosen
$mahasiswa1 = new Mahasiswa("liamela");
$dosen1 = new Dosen("Dr.Amelia");

$mahasiswa1->aksesFitur();
$dosen1->aksesFitur();
?>