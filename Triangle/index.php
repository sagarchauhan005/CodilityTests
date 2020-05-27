<?php
function solution($A)
{
    $count = 0;
    $n = sizeof($A);
    for ($i = 0; $i < $n - 2; $i++)
    {
        for ($j = $i + 1; $j < $n - 1; $j++)
        {
            for ($k = $j + 1; $k < $n; $k++)
            {
                if (
                    ($A[$i] + $A[$j] > $A[$k]) &&
                    ($A[$j] + $A[$k] > $A[$i]) &&
                    ($A[$k] + $A[$i] > $A[$j])
                ){
                    $count++;
                }
            }
        }
    }

    return $count;
}

echo solution([1, 1, 1, 1, 5, 5, 5]);
