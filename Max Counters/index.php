<?php

function solution($N, $A){
    $size = sizeof($A);
    if($N>0 && $size>0){
        $counters = array_fill(0, $N,0);
        //print_r($counters); die();
        $max = 0;
        foreach ($A as $key =>$value){
            if($value>=1) {
                if ($value <= $N) {
                    //echo "here";
                    $current_key = $value - 1;
                    $inc = $counters[$current_key] + 1;
                    $counters[$current_key] = $inc;
                    $max = $inc;
                    //print_r($counters);
                } else if ($value == ($N + 1)) {
                    $counters = array_fill(0, $N, $max);
                }
            }
            //print_r($counters);
        }
        return $counters;
    }
    else{
        return [0,0];
    }
}

print_r(solution(5, [3,4,4,6,1,4,4]));
echo "########### SOLUTIONS #########";
