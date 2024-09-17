<?php

class User{
    protected $firstName;
    protected $lastName;
    protected $address;
    protected $age;
    protected $gender;
    public function __construct($firstName,$lastName,$address,$age,$gender)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->address=$address;
        $this->age=$age;
        $this->gender=$gender;

    }

    public function getDetail(){
        return "{$this->firstName}{$this->lastName},Address:{$this->address},Age:{$this->age},Gender:{$this->gender}";

    }

}

class Employee extends User{
    private $sal;
    private $dept;

    public function __construct($firstName,$lastName,$address,$age,$gender,$sal,$dept)
    {
        parent::__construct($firstName,$lastName,$address,$age,$gender);
        $this->sal=$sal;
        $this->dept=$dept;
    }

    public function getDetail(){
        $parent=parent::getDetail();
        return "$parent,Salary:{$this->sal},Department:{$this->dept}";
    }
}
$emp=new Employee("Suman","Ghorai","Haldia",20,"male",50000,"Cse");
echo $emp->getDetail();
echo "\n";
$emp1=new Employee("Sayan","Kr","Haldia",25,"male",70000,"me");
echo $emp1->getDetail();







?>