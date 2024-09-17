<?php

// membuat kelas person
abstract class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function getRole();
}

// membuat kelas dosen
class Dosen extends person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getRole() {
        return "Dosen";
    }
}

// membuat kelas mahasiswa
class mahasiswa extends person {
    private $nim;

    public function __construct($name, $nim){
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getRole () {
        return "Mahasiswa";
    }
}

// membuat kelas abstrak jurnal
abstract class Jurnal {
    protected $judul;
    protected $tanggalPengajuan;

    public function __construct($judul, $tanggalPengajuan) {
        $this->judul = $judul;
        $this->tanggalPengajuan = $tanggalPengajuan;
    }
 
    abstract public function manageSubmission();

}

// membuat kelas jurnal dosen

class JurnalDosen extends Jurnal {
    public function manageSubmission() {
        return "Jurnal dosen dengan judul '{$this->judul}' telah diajukan pada {$this->tanggalPengajuan}.";
    }
}

// Kelas JurnalMahasiswa
class JurnalMahasiswa extends Jurnal {
    public function manageSubmission() {
        return "Jurnal mahasiswa dengan judul '{$this->judul}' telah diajukan pada {$this->tanggalPengajuan}.";
    }
}

// Contoh Penggunaan
$dosen = new Dosen("Dr. Ahmad", "123456");
$mahasiswa = new Mahasiswa("Budi", "654321");

$jurnalDosen = new JurnalDosen("Penelitian AI", "2024-09-01");
$jurnalMahasiswa = new JurnalMahasiswa("Tugas Akhir", "2024-09-05");

echo "Dosen: " . $dosen->getName() . " - Role: " . $dosen->getRole() . "<br>";
echo "NIDN: " . $dosen->getNidn() . "<br>";

echo "Mahasiswa: " . $mahasiswa->getName() . " - Role: " . $mahasiswa->getRole() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";

echo $jurnalDosen->manageSubmission() . "<br>";
echo $jurnalMahasiswa->manageSubmission();

?>