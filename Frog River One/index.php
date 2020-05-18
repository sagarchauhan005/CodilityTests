<?php
function solution($X, $A){
    asort($A);
    echo "######## ORIGINAL #######";
    print_r($A);
    echo "######## UNIQUE #######";
    $unique = array_unique($A);
    print_r($unique);
    echo "######## Diff #####";
    $diff_key = array_diff_key($A, $unique);
    print_r($diff_key);
    echo "######## Array 2 #####";
    print_r(array_diff($unique, $diff_key));
}

solution(5,[1,3,1,4,2,3,5,4]);
