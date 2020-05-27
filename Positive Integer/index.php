<?php

function solution($A) {
    // write your code in PHP7.0
    if(sizeof($A)>0){
        asort($A);
        $A = array_values($A);
        $largestNum = $A[sizeof($A)-1];
        if($largestNum>0){
            $smallest = 0;
            for($i=1; $i<$largestNum; $i++){
                if(!in_array($i, $A)){
                    return checkForPostive($i);
                    break;
                }
            }

            if(!$smallest){
                $res = $largestNum+1;
                if($res===0){
                    return checkForPostive($res);
                }
                return checkForPostive($res);
            }
        }else{
            return 1;
        }
    }else{
        return 1;
    }
}

function checkForPostive($num){
    return ($num<0)  ? 1 : $num;
}

echo solution(['−1', '−3']);

// Failed at performance due to time out on large numbers
// optimal solution : https://hackernoon.com/codility-demo-test-solution-3b01edb7b3c4
