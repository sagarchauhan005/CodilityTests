<?php


class IndexClass
{
    public $count, $total, $default, $data;
    function __construct($data) {
        $this->count = count($data);
        $this->total = 0;
        $this->data = $data;
        $this->default = 1000000000;
    }

    public function process(){
        $total = $this->total;
        echo "Count : ".$this->count;
        if($this->count>0){
            $res = array_filter($this->data, function ($elm){
                print_r($elm);
            },ARRAY_FILTER_USE_BOTH);
            print_r($res);
        }
        return ($total>$this->default) ? -1 : $total;
    }

    public function worker($value, $key){
        echo "worker";
        print_r($this); die();
    }
}

$sol = new IndexClass([0,1,0,1,1]);
echo $sol->process();
