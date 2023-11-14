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
    echo "$this->width, $this->length";
  }
}

class Rectangle extends Shape{
  public function getArea(){
    echo $this->width * $this->length;
  }
}

$coolRectangle = new Rectangle(5,5);
$coolRectangle->getArea();

// Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().

// Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.

// Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.

// Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.

// Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.

// Write a php cehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

// Write a php ca class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.



?>