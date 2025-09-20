<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$result = array_map(function($a, $b) {
    return array_merge(array($b), $a);
}, $array1, $array2);

print_r($result);
?>
