<?php

function solution($A, $B, $K){
    if($A<=$B && $K>0){
        if(($A%$K)===0){
            return (int) (($B/$K) - ($A/$K) +1);
        }else{
            return (int) (($B/$K) - ($A/$K));
        }
    }
    return 0;
}

echo solution(11,14,2);
