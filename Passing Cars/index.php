<?php

function solution($A){
    $count = count($A);
    $total = 0;
    $default = 1000000000;
    if($count>0){
        $resp = array_map(array(new PassingCars($A, $count),'process'),$A);
        $total = array_sum($resp);
    }
    return ($total>$default) ? -1 : $total;
}

class PassingCars{
    public $count, $data, $key;
    function __construct($data, $count_val) {
        $this->count = $count_val;
        $this->data = $data;
        $this->key=0;
    }

    public function process($value){
        $key = $this->key;
        $this->key++;
        $end = $this->count-$key;
        if($value===0){
            $slice = array_slice($this->data,$key,$end);
            $slice_count = count($slice);
            $dup = array_fill(0,$slice_count,1);
            $intersection = array_intersect($slice, $dup);
            return count($intersection);
        }else{
            return 0;
        }
    }
}
