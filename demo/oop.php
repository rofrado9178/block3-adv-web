<?php 

class FannyPack{
  public $color;
  public $pocket;
  public $price;
  private $zipper;

  function setColor($color){
    $this-> color = $color;
  }

  function setPocket($pocket){
    $this-> pocket = $pocket;
  }

  function setPrice($price){
    $this-> price = $price;
  }

   function zipperAction($action){

    if(!$action == "left"){
      $this->zipper  = "close";
      return;
    }
   return $this->zipper  = "open";

  }



  function getDescription(){
    echo $this->color," fanny pack <br>","color: ",$this->color,"<br>" ," pocket: ",$this->pocket, "<br>", "price: ", $this->price;
  }

  

  
}

$blackFannyPack = new FannyPack();
$blackFannyPack->setColor("black");
$blackFannyPack->setPocket(3);
$blackFannyPack->setPrice(40);
$blackFannyPack->getDescription();


echo "<br> <br>";

$redFanny = new FannyPack();
$redFanny->setColor("red");
$redFanny->setPocket(5);
$redFanny->setPrice(70);
$redFanny->getDescription();













?>