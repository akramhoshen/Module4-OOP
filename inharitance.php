<?php
class Animal{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

}

class Dog extends Animal {
    public function speak(){
        return "$this->name barks.";
    }
}

$dog = new Dog("Buddy");
echo $dog->speak();