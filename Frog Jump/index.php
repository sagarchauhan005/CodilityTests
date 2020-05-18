<?php

function solution($X, $Y, $D){
    if($X<=$Y &$D>0){
        $diff = $Y-$X;
        $rem = $diff%$D;
        $quot = (int)($diff/$D);
        return ($rem==0) ? $quot : $quot +1;
    }else{
        return 0;
    }
}
echo solution(10, 85, 30);
