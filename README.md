
# Dokumentasi Proyek OOP dalam PHP JOBSHEET 1

# Pendahuluan
  Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek
(OOP). Dalam PHP, kelas digunakan untuk mendefinisikan struktur dan perilaku objek,
sedangkan objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas
dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat
digunakan kembali.

# Tujuan Implementasi

- **Membuat Class dan Object**: Membuat kelas `Mahasiswa` dengan atribut dan metode untuk menampilkan data.
- **Membuat Atribut dan Method**: Membuat atribut untuk menyimpan data atau keadaan dari objek, metode merupakan sebuah operasi atau fungsi yang dilakukan oleh objek untuk menampilkan data.

# Langkah-langkah Implementasi

# Instruksi Kerja

# 1. Membuat Class dan Object
 //  membuat kelas mahasiswa
 
 ```sh
class Mahasiswa {
    // definisi atribut atau properti
    public $nama;
    public $nim;
    public $jurusan;

    // definisi metode atau function
  public function tampilData() {
    return "Mahasiswa dengan nama: $this->nama.<br>  nim: $this->nim.<br> jurusan: $this->jurusan.<br>";
  }

```

# 2. Mengimplementasikan construct
```sh
public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
    
# 3. Membuat metode tambahan update jurusan 

```sh
     public function updateJurusan($jurusanbaru) {
        $this->jurusan = $jurusanbaru;
    }
```

# 4. penggunaan atribut dan metode
// metode setter untuk mengubah nim

```sh
public function setNim($nimbaru) {
        $this->nim = $nimbaru;
    }
 }
```

// intasiasi objek

```sh
    $mahasiswa1 = new Mahasiswa("liamela", "230202078", "Komputer dan Bisnis");
    echo $mahasiswa1->tampilData();
```

    // mengubah jurusan 

```sh
    $mahasiswa1->updateJurusan("Rekayasa Mesin dan Pertanian");
    echo "<br>";
```

    // mengubah nim

```sh
    $mahasiswa1->setNim("230202079");
    echo "<br>";
```

    // menampilkan data yang sudah diperbarui
```sh
    echo $mahasiswa1->tampilData();
    ?>
```
 
# Tugas Jobsheet 1

# membuat kelas dan objek
 // 1. membuat kelas dosen

```sh
 class Dosen {
    // definisi atribut atau properti
    public $nama;
    public $nip;
    public $matkul;
```

    // definisi metode atau function
    
```sh
  public function tampilDosen() {
    return "Dosen dengan nama: $this->nama.<br>  nip: $this->nip.<br> mata kuliah: $this->matkul.<br>";
  }
```

 // 2. implementasi constructor
 
```sh
    public function __construct($nama, $nip, $matkul) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matkul = $matkul;
    } 
 }
```

    // 3. intasiasi objek
    
```sh
    $dosen1 = new Dosen("liamela", "230202078", "PRAKTIKUM WEB II");
    echo $dosen1->tampilDosen();
    ?>
```

# Output instruksi kerja
<img width="277" alt="output intrusksi js 1" src="https://github.com/user-attachments/assets/3f36215a-4cf9-403e-9b3f-62e27d3e30d7">

# Output tugas
<img width="240" alt="output tugas js 1" src="https://github.com/user-attachments/assets/8eda00b4-009a-41e6-9e8c-5697a1553fb7">

# Dokumentasi Proyek OOP dalam PHP JOBSHEET 2

# Pendahuluan
    Proyek ini bertujuan untuk mengimplementasikan prinsip-prinsip dasar pemrograman berorientasi objek (OOP) dalam PHP.
  Oject-Oriented Programming (OOP) merupakan paradigma pemrograman yang berfokus pada konsep objek, membuat beberapa kelas untuk 
  memodelkan pengguna pada bidang akademik, termasuk `Mahasiswa` dan `Dosen`. Proyek ini mengaplikasikan prinsip 
  Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan kode lebih modular, terstruktur, dan mudahdipelihara.

# Tujuan Implementasi
- **Membuat Class dan Object**: Membuat kelas `Mahasiswa` dengan atribut dan metode untuk menampilkan data.
- **Encapsulation**: Mengubah atribut menjadi private, dan menambahkan metode getter dan setter.
- **Inheritance**: Mewarisi kelas `Pengguna` untuk membuat kelas `Dosen` dan menambahkan atribut tambahan.
- **Polymorphism**: Menerapkan metode yang sama dengan perilaku berbeda di kelas `Mahasiswa` dan `Dosen`.
- **Abstraction**: Membuat kelas abstrak `Pengguna` dan mengimplementasikannya di kelas `Mahasiswa` dan `Dosen`.

# Langkah-langkah Implementasi

# Instruksi kerja

# 1. Membuat Class dan Object

    // membuat kelas mahasiswa
    
```sh
    <?php
class Mahasiswa {
    // atribut atau properti
    public $nama;
    public $nim;
    public $jurusan;
```

    // constructor

```sh
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```

    // metode atau function

```sh
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}
```

// Instansiasi objek dari class Mahasiswa

```sh
$mahasiswa1 = new Mahasiswa("Budi", "123456", "Informatika");
$mahasiswa1->tampilkanData();
?>
```

# 2. Encapsulation

```sh
<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```

    // Getter dan Setter untuk nama

```sh
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
```

    // Getter dan Setter untuk nim

```sh
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
```
    // Getter dan Setter untuk jurusan

```sh
    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}
```

// Demonstrasi akses menggunakan getter dan setter

```sh
$mahasiswa1 = new Mahasiswa("Budi", "123456", "Informatika");
echo $mahasiswa1->getNama() . "<br>";
$mahasiswa1->setNama("Andi");
echo $mahasiswa1->getNama() . "<br>";
?>
```

# 3. Inheritance

```sh
<?php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDataDosen() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}
```

// Instansiasi objek dari class Dosen

```sh
$dosen1 = new Dosen("Dr. Agus", "Matematika");
$dosen1->tampilkanDataDosen();
?>
```

# 4. Polymorphism

```sh
<?php
class Pengguna {
    public function aksesFitur() {
        // Default implementation (if any)
    }
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur mahasiswa.<br>";
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur dosen.<br>";
    }
}
```

// Instansiasi objek dari class Dosen dan Mahasiswa

```sh
$mahasiswa1 = new Mahasiswa();
$dosen1 = new Dosen();

$mahasiswa1->aksesFitur();
$dosen1->aksesFitur();
?>
```

# 5. Abstraction

```sh
<?php
abstract class Pengguna {
    abstract public function aksesFitur();
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur mahasiswa.<br>";
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur dosen.<br>";
    }
}
```

// Demonstrasi dengan memanggil metode aksesFitur() dari objek yang diinstansiasi

```sh
$mahasiswa1 = new Mahasiswa();
$dosen1 = new Dosen();

$mahasiswa1->aksesFitur();
$dosen1->aksesFitur();
?>
```

# Output instruksi kerja
# Output kelas objek
<img width="197" alt="output kelas objek js 2" src="https://github.com/user-attachments/assets/e30c05c6-a321-46e7-afa8-83e3792759bd">

# Output encapsulation
<img width="239" alt="outpun encapsulation js 2" src="https://github.com/user-attachments/assets/1dbe5a5a-cd88-4589-b252-b63c5752ed84">


# Output inheritance
<img width="203" alt="output inhere js 2" src="https://github.com/user-attachments/assets/d09cafad-d54d-424a-b58c-5ce86b7bf183">


# Output polymorphism
<img width="338" alt="output poly js 2" src="https://github.com/user-attachments/assets/43dfefbf-e098-4831-b681-2d270289b15c">


# Output abstraction

<img width="341" alt="output abs js 2" src="https://github.com/user-attachments/assets/1a65de87-b0c6-43cd-90ba-fd921e33fbac">

# Dokumentasi Proyek OOP dalam PHP JOBSHEET 3


# Pendahuluan 
  Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan
perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance, Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

# Tujuan Implementasi
1. Memahami dan menerapkan apa itu konsep Inheritance dalam PHP.
2. Menerapkan Polymorphism untuk mencapai fleksibilitas dalam kode.
3. Menggunakan Encapsulation untuk melindungi data dalam objek.
4. Mengimplementasikan Abstraction untuk menyederhanakan kompleksitas sistem.

- **Inheritance (Pewarisan)**: Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan menciptakan hubungan hierarkis antara kelas.

- **Polymorphism (Polimorfisme)**:Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk, biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.

- **Encapsulation (Enkapsulasi)**: Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.

 - **Abstraction (Abstraksi)**: Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.

 # Langkah-langkah Implementasi

 # instruksi kerja



// 1. Membuat Kelas Person dengan atribut name dan metode getName()

```sh
<?php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
```

// 2. Membuat Kelas Student yang mewarisi dari Person

```sh
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); // Panggil konstruktor parent
        $this->studentID = $studentID;
    }
```

     // 3. Menambahkan metode getter dan setter pada properti name
   
    // Getter dan setter untuk name

```sh
    public function getName() {
        return "Student Name: " . $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
```

    // Getter dan setter untuk studentID

```sh
    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}
```

// 4. Membuat Kelas Teacher yang mewarisi dari Person

```sh
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name); // Panggil konstruktor parent
        $this->teacherID = $teacherID;
    }
```
    // 5. Menambahkan metode getter dan setter pada properti teacherID
   

    // Getter dan setter untuk teacherID

```sh
    public function getTeacherID() {
        return $this->teacherID;
    }

    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }
```
    // 6. Override metode getName() untuk format berbeda

```sh
    public function getName() {
        return "Teacher Name: " . $this->name;
    }
}
```

// 7. Membuat Kelas abstrak Course

```sh
abstract class Course {
    abstract public function getCourseDetails();
}
```

// 8. Kelas OnlineCourse yang mengimplementasikan getCourseDetails()

```sh
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Details of Online Course.";
    }
}
```

// 9. Kelas OfflineCourse yang mengimplementasikan getCourseDetails()

```sh
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Details of Offline Course.";
    }
}
```

// 10. Menampilkan contoh penggunaan kelas-kelas yang telah dibuat

// 11. Buat objek Student dan Teacher

```sh
$student = new Student("liamela", "230202078");
echo $student->getName() . "<br>"; // Output: Student Name: liamela
echo "Student ID: " . $student->getStudentID() . "<br>"; // Output: Student ID: 230202078

$teacher = new Teacher("Dr. Amelia", "031205");
echo $teacher->getName() . "<br>"; // Output: Teacher Name: Dr. Amelia
echo "Teacher ID: " . $teacher->getTeacherID() . "<br>"; // Output: Teacher ID: 031205
```

// 12. Buat objek OnlineCourse dan OfflineCourse

```sh
$onlineCourse = new OnlineCourse();
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Details of Online Course.

$offlineCourse = new OfflineCourse();
echo $offlineCourse->getCourseDetails(); // Output: Details of Offline Course.
?>
```


 # Tugas
 
 

// 1. membuat kelas person

```sh
<?php
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
```

// 2. membuat kelas dosen

```sh
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
```

// 3. membuat kelas mahasiswa

```sh
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
```

//4.  membuat kelas abstrak jurnal

```sh
abstract class Jurnal {
    protected $judul;
    protected $tanggalPengajuan;

    public function __construct($judul, $tanggalPengajuan) {
        $this->judul = $judul;
        $this->tanggalPengajuan = $tanggalPengajuan;
    }
 
    abstract public function manageSubmission();

}
```

//5.  membuat kelas jurnal dosen

```sh
class JurnalDosen extends Jurnal {
    public function manageSubmission() {
        return "Jurnal dosen dengan judul '{$this->judul}' telah diajukan pada {$this->tanggalPengajuan}.";
    }
}
```

// 6. Kelas JurnalMahasiswa

```sh
class JurnalMahasiswa extends Jurnal {
    public function manageSubmission() {
        return "Jurnal mahasiswa dengan judul '{$this->judul}' telah diajukan pada {$this->tanggalPengajuan}.";
    }
}
```

// 7. menampilkan Contoh Pengaplikasiaan

```sh
$dosen = new Dosen("Dr. Amelia", "123456");
$mahasiswa = new Mahasiswa("liamela", "230202078");

$jurnalDosen = new JurnalDosen("Meneliti Virus Monkey Pox", "2024-08-01");
$jurnalMahasiswa = new JurnalMahasiswa("Tugas Akhir", "2026-12-03");

echo "Dosen: " . $dosen->getName() . " - Role: " . $dosen->getRole() . "<br>";
echo "NIDN: " . $dosen->getNidn() . "<br>";

echo "Mahasiswa: " . $mahasiswa->getName() . " - Role: " . $mahasiswa->getRole() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";

echo $jurnalDosen->manageSubmission() . "<br>";
echo $jurnalMahasiswa->manageSubmission();

?>
```

# Output instruksi kerja
# Output kelas objek

<img width="293" alt="output intruksi js 3" src="https://github.com/user-attachments/assets/3372e714-2e50-4855-940e-96c2c4389203">

# Output tugass

 <img width="471" alt="output tugas js 3" src="https://github.com/user-attachments/assets/f2884fe9-e485-4a47-8616-d5d54be6809e">











