<!DOCTYPE html>
<html>
<head>
   <title>Cars</title>
</head>
<body>

<center>
<?php

   class cars {
      /* Member variables */
      var $vehicle;
      var $fuel;
      var $passenger;
      var  $speed;
      
      /* Member functions */
      function setVehicle($par){
         $this->vehicle = $par;
      }
      
      function getVehicle(){
         echo"vehicle : $this->vehicle .<br/>";
      }
      
      function setfuel($par){
         $this->fuel = $par;
      }
      
      function getFuel(){
         echo " fuel:$this->fuel . <br/>";
      
   }
         function setPassenger($par){
          ;$this->passenger = $par;
      }
      
      function getPassenger(){
         echo "passenger:$this->passenger .<br/>";
      }
      
      function setSpeed($par){
         $this->speed = $par;
      }
      
      function getSpeed(){
         echo " Speed: $this->speed . <br/>";
      }
   }

$vehicle = new cars();
$vehicle = new cars;
$fuel = new cars;
$passenger = new cars;
$speed = new cars;



$vehicle->setVehicle( "sports Car" );
$fuel->setfuel( "gasoline" );
$passenger->setPassenger( "2" );
$speed->setSpeed("200 km/h <br>");


$vehicle->getVehicle();
$fuel->getFuel();
$passenger->getPassenger();
$speed->getSpeed();




$vehicle->setVehicle( "jeep" );
$fuel->setfuel( "diesel" );
$passenger->setPassenger( "20" );
$speed->setSpeed("80 km/h");


$vehicle->getVehicle();
$fuel->getFuel();
$passenger->getPassenger();
$speed->getSpeed();

?>
</center>
</body>
</html>

