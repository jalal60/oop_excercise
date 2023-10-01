<?php
//Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. 
//Implement a method to display student information

class Student
{
    public $name;
    public $age;
    public $grade;
    public function display()
    {
        echo $this->name . PHP_EOL;
        echo $this->age . PHP_EOL;
        echo $this->grade;
    }
}
$std = new Student();
$std->name = "Jamal";
$std->age = 26;
$std->grade = "A";
$std->display();
