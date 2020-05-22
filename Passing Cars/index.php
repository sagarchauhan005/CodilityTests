<?php

function solution($A){
    //print_r($A); die();
    $count = count($A);
    $total = 0;
    $default = 1000000000;
    if($count>0){
        $array = new SplFixedArray($count);
        for ($i = 0; $i < $count; ++$i) {
            $array[$i] = $A[$i];
        }
        $array = (array) $array;
        foreach ( $array as $key =>$value){
            $end = $count-$key;
            if($value==0){
                $slice = array_slice($array,$key,$end);
                //print_r($slice);
                $slice_count = count($slice);
                $dup = array_fill(0,$slice_count,1);
                $total +=count(array_intersect($slice, $dup));
            }
        }
    }
    return ($total>$default) ? -1 : $total;
}

$binary = [0,1];
$ex = range(0,10000,array_rand($binary));
echo solution($ex);
