<?php
class Student {

    private $name;
    private $age;
    private $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

     public function getName() {
        return $this->name;
    }


    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

  
    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        }
    }

 
    public function getGrade() {
        return $this->grade;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }

    public function displayInfo() {
        echo "Name: " . $this->getName() . "<br>";
        echo "Age: " . $this->getAge() . "<br>";
        echo "Grade: " . $this->getGrade() . "<br>";
    }
    public function __toString() {
        return "Student Name: $this->name, Age: $this->age, Grade: $this->grade";
    }
}

$student1 = new Student("student", 0, "A");
$student2 = new Student("student", 0, "A");
echo "<h3>Original Details:</h3>";
$student1->displayInfo();

$student1->setName("Amit Kumar");
$student1->setAge(19);
$student1->setGrade("A+");

$student2->setName("Rohit Kumar");
$student2->setAge(20);
$student2->setGrade("A+");


echo "<h3>Updated Details:</h3>";
//$student1->displayInfo();
//$student2->displayInfo();
echo $student1;
echo $student2;
?>
