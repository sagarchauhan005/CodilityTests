<?php

function solution($A, $k){
    $size = count($A);
    if($size>0){
        for ($i=0; $i<$k; $i++){
            $lasIndex = $size-1;
            $lastElem = $A[$lasIndex];
            foreach ($A as $key =>$value){
                $A[$key+1] = $value;
            }
            $A[0] = $lastElem;
            unset($A[$lasIndex+1]);
        }
        return $A;
    }else{
        return $A;
    }
}

solution([], 3);
