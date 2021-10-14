<?php
$arr = [2,1,4,5,9,10,13,2,13,8,9,2];
for($i = 1; $i < count($arr) ; $i++)
{
   $j = $i - 1 ;
   $t = $arr[$i]  ;
    while($t < @$arr[$j] && $j >= 0  )
    {
           $arr[$j + 1] = $arr[$i];
           $j--;
    }
    $arr[$j + 1] = $t;
}
echo "<pre>";
print_r($arr);
echo "</pre>";