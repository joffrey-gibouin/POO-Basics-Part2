<?php

require 'Truck.php';

$truck = new Truck('green', 2,'electric',5);
$truck->setStorage(3);

echo $truck->storageLevel() . '<br>';

echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
