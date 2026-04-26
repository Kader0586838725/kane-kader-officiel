<?php
$tableau1 =[1...9];
$tableau2 =[1...7];
$fusion = [1...16];
$tableau1 = $tableau2 = $fusion = 1;
while ($tableau1 <= 9 and $tableau2 <=7) {
  if ($tableau1 [1...9] > [1...7] ) {
    $fusion [1...16] =$tableau2[1...7];
    $tableau2 =$tableau2 + 1 ;

  }
}




?>