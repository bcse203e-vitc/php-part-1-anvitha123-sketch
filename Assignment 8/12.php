<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function changeCase($arr) {
    echo "Values are in lower case.\n";
    print_r(array_map('strtolower', $arr));
    
    echo "Values are in upper case.\n";
    print_r(array_map('strtoupper', $arr));
}

changeCase($Color);
?>
