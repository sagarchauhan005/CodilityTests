<?php
function solution($A) {
    // write your code in PHP7.0
    //smallest positive greater than 0
    $smallestPos = 1;

    //sort the array ascending order
    asort($A);
    $size = sizeof($A);
    if($size>0){
        $smallestInArr = $A[0];

        // if the smallest is a positive number, then proceed
        if($smallestInArr>0){
            // find the last greatest number
            $last = $A[$size - 1];
            for ($i=1; $i<$last; $i++){
                // check if the integer is not available in $A
                if(!in_array($i,$A)){
                    $smallestPos = $i;
                    break;
                }else{
                    //if everything matches exactly then the smallest integer is outside of the
                    // array
                    $smallestPos = $last++;
                }
            }
            return $smallestPos;
        }
    }

    return $smallestPos;
}

echo solution([1]);

/*$N = 100000;
$range = range(1, $N);
shuffle($range);
//print_r($range);
$random = array_rand($range, 2);
//print_r($random);
echo "Missing : ".$range[$random[1]]."\n";
unset($range[$random[1]]);
echo "Found : ".solution($range);*/
