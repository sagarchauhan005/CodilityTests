<?php
function solution($A){
    $unique = array_unique($A);
    return count($unique);
}

echo solution(array_fill(0,10,0));
