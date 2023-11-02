<?php 

class FannyPack{
  private $color;
  private $pocket;
  private $price;
  private $isZipperOpen = false;
  private $zipperPosition = "right";

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
    if($this->zipperPosition != "left"){
      echo "zipper current position is to the ", $this->zipperPosition , "<br>";
      $this->isZipperOpen = true;
      $this->zipperPosition = "left";
      echo "Turn zipper to the left <br>";
      echo "zipper current position is to the ", $this->zipperPosition , "<br>";
      return;
    }
    echo "Bag is already opened";
    return;
  }

  private function closeZipper(){
    if($this->zipperPosition != "right"){
       echo "zipper current position is to the ", $this->zipperPosition , "<br>";
       $this->isZipperOpen = false;
       $this->zipperPosition = "right";
       echo "Turn zipper to the right <br>";
       echo "zipper current position is to the ", $this->zipperPosition , "<br>";
       return;
    }
    echo "Bag is already closed";
    return;
   
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
echo $redFannyPack->action("put");













?>