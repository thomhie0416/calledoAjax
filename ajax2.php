<?php
   // Array with names
   $a[] = "Thommy";
   $a[] = "Carl";
   $a[] = "Rey Martin";
   $a[] = "Alfie";
   $a[] = "Aljun";
   $a[] = "Lovely Joy";
   $a[] = "Josephine";
   $a[] = "Alvin";
   $a[] = "Martin";
   $a[] = "Mark Ronald";
   $a[] = "Noel";
   $a[] = "Calledo";
   $a[] = "Sarsonas";
   $a[] = "Marcellana";
   $a[] = "Rivera";
   $a[] = "Romagiera";
   $a[] = "Ybañez";
   $a[] = "Cabatoan";
   $a[] = "Salonoy";
   $a[] = "Manalop";
   $a[] = "Deramos";
   $a[] = "Villarin";
  
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
		
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>
