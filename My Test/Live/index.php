<?php

function solution($T, $R) {
    // write your code in PHP7.0
    // lets map all the errors to standard values to avoid common issues
    $total_test_count = count($T);
    asort($T);
    $R = array_map('standardise',$R);

    //filter only correct results
    $okResult = array_filter($R, 'correctRes');
    $res = 0;

    foreach ($okResult as $key =>$value){
        $actual_value = $T[$key];
        if(!array_search($actual_value."c", $T)){
            $res++;
        }
    }

    return (int) ($res/$total_test_count)*100;
}

/*
 * Returns correct results
 * */
function correctRes($elem){
    return ($elem==2) ? true : false;
}

/*
 * The function takes the array and return standard error values
 * */
function standardise($elem){
    switch ($elem){
        case "Wrong answer" :
            return 1;
        case "OK" :
            return 2;
        case "Runtime error" :
            return 3;
        case "Time limit exceeded" :
            return 4;
        default :
            return 0;
    }
}

echo solution(['test1a', 'test2', 'test1b', 'test1c', 'test3'],['Wrong answer','OK','Runtime error','OK','Time limit exceeded']);
