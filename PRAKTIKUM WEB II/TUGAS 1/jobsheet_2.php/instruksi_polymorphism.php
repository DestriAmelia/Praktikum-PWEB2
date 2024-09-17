<?php
// kelas pengguna
class pengguna {
    public function aksesFitur() {
        echo "Akses fitur umum Pengguna.<br>";
    }
}

// kelas mahasiswa
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Mahasiswa: Mengakses kelas dan materi kuliah.<br>";
    }
}

// kelas dosen
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Akses fitur Dosen: Mengelola kelas dan memberikan nilai.<br>";
    }
}

// instansi objek dan mahasiswa dan dosen
$mahasiswa1 = new Mahasiswa();
$dosen1 = new Dosen();

$mahasiswa1->aksesFitur();
$dosen1->aksesFitur();
?>