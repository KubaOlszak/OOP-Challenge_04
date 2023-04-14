<?php

require_once 'Car.php';
require_once 'Motorway.php';
require_once 'Residentialway.php';
require_once 'Pedestrianway.php';

$break = new Car('red',8,'fuel');
$autoroute = new Motorway();

$autoroute->addVehicles($break);


                        /*       Roule + stop        */
   
echo $break->start();
echo $break->forward(10) ."<br>";

echo "le break roule à : " . $break->getCurrentSpeed() . "km/h <br>";
echo "Sur l'autoroute il y a : " . $autoroute->getCurrentVehicles() . " véhicule(s) <br>";
echo $break->brake() ."<br>";   // ."<br>"


                        /*       Frein à main        */
                                
echo $break->setParkBrake(false);    // true ou false

try {
    echo $break->start();
} catch (Exception $e){
    die($e->getMessage());
} finally {
    echo "Ma voiture roule comme un donut !";
}
?>
