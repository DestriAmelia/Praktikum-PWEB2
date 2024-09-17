<?php
// Kelas Person dengan atribut name dan metode getName()
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); // Panggil konstruktor parent
        $this->studentID = $studentID;
    }

    // Getter dan setter untuk name
    public function getName() {
        return "Student Name: " . $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getter dan setter untuk studentID
    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name); // Panggil konstruktor parent
        $this->teacherID = $teacherID;
    }

    // Getter dan setter untuk teacherID
    public function getTeacherID() {
        return $this->teacherID;
    }

    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }

    // Override metode getName() untuk format berbeda
    public function getName() {
        return "Teacher Name: " . $this->name;
    }
}

// Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan getCourseDetails()
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Details of Online Course.";
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails()
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Details of Offline Course.";
    }
}

// Contoh penggunaan kelas-kelas yang telah dibuat

// Buat objek Student dan Teacher
$student = new Student("Alice", "S12345");
echo $student->getName() . "<br>"; // Output: Student Name: Alice
echo "Student ID: " . $student->getStudentID() . "<br>"; // Output: Student ID: S12345

$teacher = new Teacher("Mr. Smith", "T67890");
echo $teacher->getName() . "<br>"; // Output: Teacher Name: Mr. Smith
echo "Teacher ID: " . $teacher->getTeacherID() . "<br>"; // Output: Teacher ID: T67890

// Buat objek OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse();
echo $onlineCourse->getCourseDetails() . "<br>"; // Output: Details of Online Course.

$offlineCourse = new OfflineCourse();
echo $offlineCourse->getCourseDetails(); // Output: Details of Offline Course.
?>
