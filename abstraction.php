<?php
// abstract class
abstract class Animal {
    abstract public function displayInfo();
}
class dog extends Animal {
    public function displayInfo(){
        echo "Dog Barks<br>";
    }
}
$dog = new Dog();
$dog->displayInfo();
?>