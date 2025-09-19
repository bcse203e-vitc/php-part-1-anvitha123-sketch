<?php
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 
               76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
               74, 62, 62, 65, 64, 68, 73, 75, 79, 73);


$sum = array_sum($temps);
$count = count($temps);
$average = $sum / $count;
echo "Average Temperature is : " . round($average, 1) . "\n";


sort($temps);
$uniqueTemps = array_unique($temps);


$lowest = array_slice($uniqueTemps, 0, 5);
echo "List of five lowest temperatures : " . implode(", ", $lowest) . "\n";


$highest = array_slice($uniqueTemps, -5);
echo "List of five highest temperatures : " . implode(", ", $highest) . "\n";
?>

