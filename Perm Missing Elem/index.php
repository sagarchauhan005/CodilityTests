<?php

function solution($A) {
    if (count($A) == 0)
        return 1;
    return array_sum(range(1, count($A)+1)) - array_sum($A);
}

echo solution([2,3,1,5]);
