<?php


function solution($N) {
    // write your code in PHP7.0
    if($N!=null){
        $bin = decbin($N);
        $binArr = str_split($bin);
        //print_r($binArr);
        $pos = array_keys($binArr,1);
        //print_r($pos); return;
        $diff = [];
        if(sizeof($pos)>1){
            for($i=0; $i<sizeof($pos); $i++){
                $curr = $pos[$i];
                $next = $i+1;
                if(array_key_exists($next, $pos)){
                    $large = $pos[$next];
                    array_push($diff, (($large-$curr)-1));
                }
            }
            asort($diff);
            $res = array_values($diff);
            return $res[sizeof($res)-1];
        }else{
            return 0;
        }
    }
}

solution(32);
