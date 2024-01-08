<?php   

include_once 'models/suppliers.php';

Class SupplierController{
  private $model;

  public function __construct(){
    $this->model = new SuppliersModel();
  
  }

  public function showSuppliers(){
    $suppliers = $this->model->showAllSuppliers();
    include("views/all-suppliers.php");
   
  }

  public function inputSupplier(){
 
    include("views/input-supplier.php"); 
  }

public function addSupplier(){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postal_code = $_POST['postal_code'];
    $contact_person = $_POST['contact_person'];
    $contact_number = $_POST['contact_number'];


    if(!$name || !$address || !$city || !$province || !$postal_code || !$contact_person || !$contact_number){
      echo "<p?> Missing Information </p>";
      $this->inputSupplier();
      return;
    }
    else if($this->model->insertSupplier($name,$address,$city,$province , $postal_code, $contact_person, $contact_number)){
      echo "<p> Supplier Added  : Name: $name , Adress: $address ,City: $city , Province : $province$ , Postal Code: $postal_code, Contact Person: $contact_person , Contact Number: $contact_number";
     
    }
    else{
      echo "failed to input new Supplier";
    }
   
     $this->showSuppliers();

  }

}

$supplierController = new SupplierController();

if(isset($_POST["add-supplier"])){
  $supplierController->addSupplier();
}
else if(isset($_GET["show-supplier"])){
  $supplierController->showSuppliers();
}
// else if(isset($_GET["delete"])){
//   $supplierController->delete();
// }
// else if(isset($_POST["edit-ingredient"])){
//   $supplierController->edit();
// }
else{

    $supplierController->inputSupplier();
  
}



?>