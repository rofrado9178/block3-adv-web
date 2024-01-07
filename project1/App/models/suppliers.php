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

}

// $model = new SuppliersModel();
// $suppliersJson = $model->showAllSuppliers();
// echo $suppliersJson;


?>