<?php 

function reverse($string){
  $reverse = "";
  $length = strlen($string);
  $reverseLength = strlen($reverse);
  for($i = $length; $i >= 0; $i--){
    if($string[$i] == " " || $string[$i] == "." || $string[$i] == ","){
      continue;
    }
    $reverse .= $string[$i];
    
  }

  for($i = 0; $i <= $reverseLength; $i++ ){
    if($reverse[$i] == $string[$i]){
      echo "palindrome";
    }else{
      echo "not palindrome";
    }
  }

}

echo reverse("wait.me,tiaw");


?>