<?php
class AccessModifier {
    public $publicProperty ="I am public";
    protected $protectedProperty = "I am protected";
    private $privateProperty = "I am private";
    public function showProperties (){
        echo $this->publicProperty . "<br>";
        echo $this->protectedProperty . "<br>";
        echo $this->privateProperty . "<br>";
    }
}
class SubclassExample extends AccessModifier{
    public function showProtectedProperty() {
        // echo $this->publicProperty . "<br>";
        echo $this->protectedProperty . "<br>";
        // echo $this->privateProperty . "<br>";

    }
}
// $example = new AccessModifier();
// echo $example->publicProperty ."<br>"
// $example->showProperties ();

$subExample = new SubclassExample();
$subExample->showProtectedProperty();
?>