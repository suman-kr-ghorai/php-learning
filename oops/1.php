<?php
class Students
{
  
    public $name;
    public $age;

    
     function __construct($n, $a=18)
     {
        $this->name = $n;
        $this->age = $a;
     }

    function display() 
    {
        echo "Name: " . $this->name . "<br>"."Age: " . $this->age;
    }
}


$obj = new Students("Suman",30);
$obj->display();
?>
