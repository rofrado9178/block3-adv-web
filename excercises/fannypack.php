<?php 

class FannyPack{
  private $color;
  private $pocket;
  private $price;
  private $isZipperOpen = false;

  public function __construct($color, $pocket, $price )
  {
    $this->color = $color;
    $this->pocket = $pocket;
    $this->price = $price;

  }

  public function getDescription(){
    return "Fanny Pack color is ". $this->color. " with ". $this->pocket." pockets and the price is $ ". $this->price; 
  }

  private function openZipper(){
    $this->isZipperOpen = true;
  }

  private function closeZipper(){
    $this->isZipperOpen = false;
  }

  public function action($action){
    if(!$this->isZipperOpen){
        $this->openZipper();
      }

    if($action == "put" ||$action == "take"){
      if($this->isZipperOpen == true){
        echo "status of zipper is open <br>";
      }
      echo "Zipper is Open you can " , $action , " something <br>";

      $this->closeZipper();
       if($this->isZipperOpen == false){
        echo "status of zipper is close";
      }

      return;
    }
    
    echo "you can only take something or put something";
      return;
  }

}

$redFannyPack = new FannyPack("white", 3, 20);
echo $redFannyPack->getDescription();

echo "<br>";
$redFannyPack->action("put");













?>