<?php

$presentDay = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
$destinationTime = new \DateTime('2112-12-12 21:47');

echo "Date actuelle : " . $presentDay->format('M d o a h i');
echo PHP_EOL . "<br>Date de destination : " . $destinationTime->format('M d o a h i');

$diff = $presentDay->diff($destinationTime, true);
echo PHP_EOL . PHP_EOL . "<br><br>" . $diff->format('%y ans, %m mois, %d jours, %h heures, et %i minutes séparent ces deux dates.');

$diffInMinutes = $diff->days*24*60;
$fuelLiters = $diffInMinutes/10000;

echo PHP_EOL . "<br>Cela équivaut à " . number_format($diffInMinutes) . " minutes, soit " . number_format($fuelLiters, 2) . " litres de carburant.";