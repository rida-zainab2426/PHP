<?php
class person{
    // properties
    public $name;
    public $age;
    // method
    public function greet (){
        echo "Hello,My name is $this->name and I am $this->age years old";
    }
}
// creating an object of the class
$person = new person();
// assigning value
$person->name="Rida";
$person->age=19;
// calling the method
$person->greet();
?>