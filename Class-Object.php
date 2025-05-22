<?php
//Blue Print
class Person {
    public $name; //Declare Properties
    public $age;

    public function introduce() { // Create a Mathod || Function
        echo "My name is ".$this->name." and i am ".$this->age." years old";
    }
}

$person1 = new Person();  // Create Instance || Object
$person1->name = "Akram"; //Value Assign in Variable
$person1->age = 30;
$person1->introduce() ; // Call Method
?>