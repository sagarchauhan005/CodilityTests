<?php

function solution($A){
    $size = count($A);
    if($size>=2){
        $last = $size-1;
        $sum = array_sum($A);
        $add = 0;
        $min = 0;
        for($i=0; $i<$last; $i++){
            $add +=$A[$i];
            $res = abs($add - ($sum - $add));
            if($i==0){
                $min = $res;
            }
            if($res<$min){
                $min = $res;
            }
        }
        return $min;
    }else{
        return 0;
    }
}

//echo solution([3,1,2,4,3]);

// to generate data set to test

/*$start =0;
$N=100;
$arr = range($start, $start+$N);
shuffle($arr);
print_r($arr);
echo solution($arr);*/
