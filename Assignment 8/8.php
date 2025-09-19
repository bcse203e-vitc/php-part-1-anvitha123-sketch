<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "Original Array:\n";
print_r($age);
asort($age);
echo "\n(a) Ascending order sort by Value:\n";
print_r($age);
ksort($age);
echo "\n(b) Ascending order sort by Key:\n";
print_r($age);
arsort($age);
echo "\n(c) Descending order sort by Value:\n";
print_r($age);
krsort($age);
echo "\n(d) Descending order sort by Key:\n";
print_r($age);
?>

