<?php

function solution($A) {
    if (count($A) == 0)
        return 1;
    $res = array_sum(range(1, count($A))) - array_sum($A);
    return ($res<0) ? 0 : 1;
}

echo solution([4,1,3,2]);
