<?php 

class Person {
    public $name;  //Declare Properties
    public $email;

    public function __construct($name,$email) {  //Default method where set required data
        $this->name = $name;
        $this->email = $email;
    }

    public function sayHello() {  // Create a Mathod || Function
        return "Hello my name is ".$this->name;
    }
}

$person1 = new Person('akram','akram@gmail.com');  //assign required value
echo $person1->sayHello()."\n";


class Rectangle {
    public $width;
    public $height;

    public function setDimensions ($width,$height) {  //Setter Method
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea () { //geater Method
        return $this->width * $this->height;
    }
}

$rect1 = new Rectangle();
$rect1->setDimensions(10,15);
echo $rect1->getArea();

?>