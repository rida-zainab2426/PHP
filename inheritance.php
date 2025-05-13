<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // parentclass
    class vehicle {
        public $brand="Honda";
        public $model="civic";
        
        public function displayInfo() {
            echo "This is a $this->brand $this->model.<br>";
        }
    }
    // Child class
    class car extends vehicle {
        public $doors=4;

        public function displayInfo(){
            parent ::displayInfo();
            echo "It has $this->doors doors.<br>"; 
           
        }
    }
    // instance of the car class
    $car = new Car() ;
    $car->displayInfo();
    ?>
</body>
</html>