<?php
  //function multiplication($nombre)
  //{
  //   echo "<h1><u>table de multiplication de $nombre</u><h1>";
  //    for ($i=0; $i <=10 ; $i++) { 
  //    	# code...
  //  }


     function mutiplication2 ($nombre){
   	   for ($i=0; $i <=$nombre ; $i++){
   	     echo "<h1><u>table $i</u></h1>";
   	     for ($j=0; $j <=10 ; $j++){
   	         $p =$i*$j;
   	          echo "<h4>$i x $j =$p</h4>";   	    	
   	     }
   
   	   }  
     }



 ?>