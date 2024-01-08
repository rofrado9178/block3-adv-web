<?php 

require_once("connection.php");

class SuppliersModel{
  public $connect;

  public function __construct(){
    $createConnection = new Connection();
    $db = $createConnection->connectDB();
    $this->connect = $db;
  }

  public function showAllSuppliers(){
    if($this->connect){
      $stmt = $this->connect->prepare("SELECT * FROM Supplier ORDER BY supplier_id DESC");
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt = null;
      // for json return use json_encode
      // return json_encode($results);

      return $results;
    }
    return false;
  }

public function insertSupplier($name,$address,$city,$province , $postal_code, $contact_person, $contact_number){
    if($this->connect){
      try{
        
        $stmt = $this->connect->prepare("INSERT INTO `Supplier` ( `name`, `address`, `city`, `province`, `postal_code`, `contact_person`, `contact_number`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $address, PDO::PARAM_STR);
        $stmt->bindParam(3, $city, PDO::PARAM_STR);
        $stmt->bindParam(4, $province,PDO::PARAM_STR);
        $stmt->bindParam(5, $postal_code,PDO::PARAM_STR);
        $stmt->bindParam(6, $contact_person,PDO::PARAM_STR);
        $stmt->bindParam(7, $contact_number,PDO::PARAM_STR);
        $stmt->execute();
        $stmt = null;
  
  
        return true;
      }
      catch(PDOException $e){
        $error = "Connection Error";
        $error .= $e->getMessage();
        include("views/error.php");
        exit();
      }
    }
    return false;
  }

}

// $model = new SuppliersModel();
// $suppliersJson = $model->showAllSuppliers();
// echo $suppliersJson;


?>