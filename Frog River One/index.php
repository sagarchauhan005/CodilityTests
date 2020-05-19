<?php
function solution($X, $A){
    asort($A);
    //get all the unique value
    $unique = array_unique($A);
    //get repeated values
    $diff_key = array_diff_key($A, $unique);
    $arr2 = array_diff($unique, $diff_key); // get difference
    $combine = $diff_key + $arr2; // combine

    $unique_sum = getSum($unique);
    $comb_sum = getSum($combine);

    if($unique_sum<$comb_sum){
        return last_elem($unique);
    }else if($unique_sum>$comb_sum){
        return last_elem($combine);
    }else{
        return -1;
    }
}

function getSum($arr){
    return array_sum(array_flip($arr));
}

function last_elem($arr){
    $arr = array_flip($arr);
    return $arr[sizeof($arr)];
}

function solutionNew($X, $A){
    if(sizeof($A)>0 && $A!=null){
        $leaves = [];
        $range = range(0, sizeof($A));
        foreach ($range as $key=>$value){
            $leaves[$A[$key]] = true;
            if(sizeof($leaves)==$X){
                return $key;
            }
        }
    }
    return -1;
}

echo solutionNew(5,[1,3,1,4,2,3,5,4]);
