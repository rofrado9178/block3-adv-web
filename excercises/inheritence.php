<?php 

// Write a php class called Animal with a method called makeSound(). 
// Create a subclass called Cat that overrides the makeSound() method to bark.

class Animal{
  public function makeSound(){
    echo "from animal : Groaaar";
  }
}

class Cat extends Animal{
  public function makeSound()
  {
    echo "wof wof <br>";
  }
}

$superMiaw = new Cat();
$superMiaw->makeSound();

// Write a php class called Vehicle with a method called drive(). 
// Create a subclass called Car that overrides the drive() method to print "Repairing a car".
class Vehicle{
  public function drive(){
    echo "start the engine, turn the transimition to drive and here we go!!";
  }
}

class Car extends Vehicle {
  public function drive(){
    echo "Repairing a car <br>";
  }
}

$BMW = new Car();
$BMW->drive();

// Write a php class called Shape with a method called getArea(). 
// Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.

class Shape{
  protected $width;
  protected $length;
  public function __construct($width , $length)
  {
    $this->width = $width;
    $this->length = $length;
  }

  public function getArea(){
    echo $this->width, $this->length;
  }
}

class Rectangle extends Shape{
  public function getArea(){
    echo $this->width * $this->length, "<br>";
  }
}

$coolRectangle = new Rectangle(5,5);
$coolRectangle->getArea();

// Write a php class called Employee with methods called work() and getSalary().
//  Create a subclass called HRManager that overrides the work() method 
// and adds a new method called addEmployee().

class Employee{
  protected $name;
  protected $work;
  protected $salaryPerHour;
  protected $workHoursPerWeek;
  public function __construct($name,$workHoursPerWeek,$salaryPerHour,$work)
  {
    $this->name = $name;
    $this->workHoursPerWeek = $workHoursPerWeek;
    $this->salaryPerHour = $salaryPerHour;
    $this->work = $work;
  }
  public function work(){
    echo "you work as ",$this->work ," with work hours ",$this->workHoursPerWeek,"per week <br>" ;
  }

  public function getSalary(){
    echo "your salary is ", $this->salaryPerHour * $this->workHoursPerWeek, " this week <br>";
  }
}

class HRManager extends Employee{
  public function work(){
    echo "congrats you are HR Manager now but you still work ",$this->workHoursPerWeek," per week <br>";
  }

  public function addEmployee($name,$workHoursPerWeek, $salaryPerHour, $work){
    $newEmployee = new Employee($name, $workHoursPerWeek, $salaryPerHour, $work);
    echo "you just hired a new employee with name ",$newEmployee->name, ", salary ",$newEmployee->salaryPerHour," per hour", ", work hours per week is ", $newEmployee->workHoursPerWeek, " hours and work as " ,$newEmployee->work, "<br>";
  }
}

$mrHRManager = new HRManager("paul", 40, 100,"HR Manager");
$mrHRManager->work();
$mrHRManager->getSalary();
$mrHRManager->addEmployee("jack",40,20,"cashier");

// Write a php class known as "BankAccount" with methods called deposit() and withdraw(). 
// Create a subclass called SavingsAccount that overrides the withdraw() 
// method to prevent withdrawals if the account balance falls below one hundred.
$bankId = 0;
class BankAccount{
  protected $balance;
  protected $accountNumber;
  protected $amount;
  protected $accountOwner;

  public function __construct($accountOwner, $balance=0){
   global $bankId;
   $bankId++;
   $this->accountNumber = $bankId;
   $this->accountOwner = $accountOwner;
   $this->balance = $balance;
  }

  public function deposit($amount){
    $this->balance += $amount;
    echo "you deposit $amount$ your balance now is ", $this->balance, "<br>";
  }

  public function withdraw($amount){
    if ($this->balance > $amount){
      $this->balance -= $amount;
      echo "You withdraw $amount$. Your current Balance is ", $this->balance, "<br>";
      return;
    }
    echo " your dont have enough balance to do this withdrawal <br>";
    return;
  }

  public function checkBalance(){
    echo "Hello ",$this->accountOwner,  " your balance is ", $this->balance, "<br>";
  }

}

class SavingAccount extends BankAccount{
  public function withdraw($amount)
  {
    if($this->balance <= 100){
      echo "you have balance less than 100$, you are not able to withdraw money <br>";
      return;
    }
    parent::withdraw($amount);
    return;
  }
}

$jackAccount = new SavingAccount("Jack");
$jackAccount->checkBalance();
$jackAccount->deposit(150);
// $jackAccount->deposit(150);
// $jackAccount->withdraw(100);
$jackAccount->withdraw(50);
$jackAccount->checkBalance();


// Write a php class called Animal with a method named move(). 
// Create a subclass called Cheetah that overrides the move() method to run.
class Animal2{
  public function move(){
    echo "walking slowly <br>";
  }
}

class Cheetah extends Animal2{
  public function move(){
    echo "run!! <br>";
  }
}

$coolCheetah = new Cheetah();
$coolCheetah->move();

// Write a php class known as Person with methods called getFirstName() and getLastName().
//  Create a subclass called Employee that adds a new method named getEmployeeId() 
// and overrides the getLastName() method to include the employee's job title.

class Person{
  protected $firstName;
  protected $lastName;
  protected $jobTitle;

  public function __construct($firstname, $lastname, $jobtitle){
    $this->firstName = $firstname;
    $this->lastName = $lastname;
    $this->jobTitle = $jobtitle;
  }

  public function getFirstName(){
    echo "First Name: ",$this->firstName, "<br>";
  }
  
    public function getlastName(){
    echo "Last Name: ",$this->lastName, "<br>";
  }
}

class Employee2 extends Person{
  public function getLastName(){
    echo parent::getlastName()," work as ", $this->jobTitle, "<br>";
  }
}

$baba = new Employee2("baba", "blacksheep", "farmer");
$baba->getFirstName();
$baba->getLastName();

// Write a php class called Shape with methods called getPerimeter() and getArea(). 
// Create a subclass called Circle that overrides the getPerimeter() and getArea() 
// methods to calculate the area and perimeter of a circle.

class Shape2{
  protected $pi = 3.14;
  protected $radius;
  public function __construct($radius)
  {
    $this->radius = $radius;
    // $this->pi = 3.14;
  }
  public function getPerimeter(){
    return 0;
  }

  public function getArea(){
    return 0;
  }
}

class Circle extends Shape2{
  public function getPerimeter(){
  return "perimeter of circle with radius $this->radius is " .$this->radius * 2 * $this->pi . "<br>";
  }

  public function getArea(){
    return "the area of circle with radius ". $this->radius. " is ". ($this->pi * $this->radius * $this->radius). "<br>";
  }
}

$coolCircle = new Circle(6);
echo $coolCircle->getPerimeter() ;
echo $coolCircle->getArea();

// Write a php cehicle class hierarchy. 
// The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. 
// Each subclass should have properties such as make, model, year, and fuel type. 
// Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

class Vehicle2{
  protected $make;
  protected $model;
  protected $year;
  protected $fuelType;
  protected $distancePer100L;

  public function __construct($make,$model,$year,$fuelType,$distancePer100L){
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
    $this->fuelType = $fuelType;
    $this->distancePer100L = $distancePer100L;
  }

  public function fuelEfficiency(){
    return "the fuel effiency is 1 : " . $this->distancePer100L / 100 . "<br>";
  }
  
}

class Truck extends Vehicle2{
  
  public function maximumSpeed(){
    return "This Truck maximum speed is " . 180 . "Km/hour";
  }

  
}

class Car2 extends Vehicle2{
  
  public function maximumSpeed(){
    return "This Car maximum speed is " . 220 . "Km/hour";
  }

  
}

class Motorcycle extends Vehicle2{
  
  public function maximumSpeed(){
    return "This Motor maximum speed is " . 100 . "Km/hour";
  }

  
}

$coolTruck = new Truck("RAM", "F1500", "2023", "gas" , 1000);
echo $coolTruck->fuelEfficiency();
echo $coolTruck->maximumSpeed() . "<br>";

$coolCar = new Car2("Toyota", "f86", "2023", "gas" , 600);
echo $coolCar->fuelEfficiency();
echo $coolCar->maximumSpeed() . "<br>";

$coolMotor = new Motorcycle("Yamaha", "Mio", "2023", "Electric" , 2000);
echo $coolMotor->fuelEfficiency();
echo $coolMotor->maximumSpeed() . "<br>";

// Write a php ca class hierarchy for employees of a company. 
// The base class should be Employee, with subclasses Manager, Developer, and Programmer.
// Each subclass should have properties such as name, address, salary, and job title. 
// Implement methods for calculating bonuses, generating performance reports, and managing projects.

class Employee3{
  protected $name;
  protected $address;
  protected $salary;
  protected $jobTitle;
  protected $performance;
  protected $bonus;
  public function __construct($name,$address,$salary,$jobTitle)
  {
    $this->name = $name;
    $this->address = $address;
    $this->salary = $salary;
    $this->jobTitle = $jobTitle;
  }

  public function get_name(){
    return $this->name;
  }

  public function calculateBonus(){

     if($this->performance == 10){
      $this->bonus = $this->salary * 0.4;
      return $this->bonus;
    }
     elseif($this->performance == 7){
      $this->bonus = $this->salary * 0.2;
      return $this->bonus;
    }
      elseif($this->performance == 5){
      $this->bonus = $this->salary * 0.1;
      return $this->bonus;
    }
    else{
      return "sorry no bonus for you!";
    }

    

  }
  

}


class Developer extends Employee3{

  protected $projects;
  protected function generatePerformance(){
       if($this->projects > 4){
      $this->performance = 10;
    }
    elseif($this->projects < 4 && $this->projects > 2){
      $this->performance = 7;
    }
    elseif($this->projects <= 2 && $this->projects >= 1){
      $this->performance = 5;
    }
    else{
      $this->performance = 0;
    }

    }

    public function manageProjects($projectDone){
      $this->projects = $projectDone;
      $this->generatePerformance();
      
    }

    

}

class Manager extends Employee3{

  protected $projects;
  protected function generatePerformance(){
       if($this->projects > 8){
      $this->performance = 10;
    }
    elseif($this->projects < 6 && $this->projects > 4){
      $this->performance = 7;
    }
    elseif($this->projects <= 4 && $this->projects >= 2){
      $this->performance = 5;
    }
    else{
      $this->performance = 0;
    }

    }

    public function manageProjects($projectDone){
      $this->projects = $projectDone;
      $this->generatePerformance();
      
    }

    

}

class Programmer extends Employee3{

  protected $projects;
  protected function generatePerformance(){
       if($this->projects > 3){
      $this->performance = 10;
    }
    elseif($this->projects <= 3 && $this->projects >= 2){
      $this->performance = 7;
    }
    elseif($this->projects >= 1){
      $this->performance = 5;
    }
    else{
      $this->performance = 0;
    }

    }

    public function manageProjects($projectDone){
      $this->projects = $projectDone;
      $this->generatePerformance();
      
    }
}

$coolDeveloper = new Developer("david", "Montreal", 100000, "Developer");
echo $coolDeveloper->manageProjects(5) . "<br>";
echo $coolDeveloper->get_name() . " " . "your bonus is ". $coolDeveloper->calculateBonus() . "<br>";

$coolManager = new Manager("Patrice", "Montreal", 150000, "Manager");
echo $coolManager->manageProjects(9) . "<br>";
echo $coolManager->get_name() . " " . "your bonus is ". $coolManager->calculateBonus() . "<br>";

$coolProgrammer = new Programmer("Brownie", "Montreal", 200000, "Programmer");
echo $coolProgrammer->manageProjects(1) . "<br>";
echo $coolProgrammer->get_name() . " " . "your bonus is ". $coolProgrammer->calculateBonus() . "<br>";
?>