<?php

function solution($S, $P, $Q) {
    // write your code in PHP7.0
    $base = ['A'=>1,'C'=>2,'G'=>3,'T'=>4];

    $split = str_split($S);
    $res = array_fill(0,count($split),0);
    $qCount = count($Q);
    $pCount = count($P);
    $arr1=$P; $arr2=$Q;
    if($qCount>$pCount){
        $arr1 = $Q;
        $arr2 = $P;
    }
    foreach ($arr1 as $key =>$value){
        if(array_key_exists($key, $arr2)){
            $start = $arr1[$key];
            $qKey = $arr2[$key];
            $end = getEnd($arr1[$key], $qKey, $start);
            $selection = array_slice($split,$start, $end);
            //echo "############################\n";
            //print_r($selection);
            asort($selection);
            //print_r(array_values($selection));
            $sorted = array_values($selection);
            if(sizeof($sorted)>0){
                //echo "Value".$base[$sorted[0]]."\n";
                array_push($res,$base[$sorted[0]]);
            }
            //echo "############################\n";
        }
    }
    return $res;
}

function getEnd($PKey, $qKey, $start){
    $end = 0;
    if($qKey===$start){
        $end = 1;
    }elseif($qKey>$start){
        $end = ($qKey - $start) +1;
    }elseif ($qKey<$start){
        $start = $qKey;
        $end = ($PKey-$start) +1;
    }
    return $end;
}

print_r(solution('GGGGGGGGG',[2,5,0],[4,5,6]));

