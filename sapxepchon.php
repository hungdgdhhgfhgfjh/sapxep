<?php
$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
for($i = 0  ; $i < count($arr) - 1 ; $i++)
{
$min            = 1;
for($j = + 1 ;$j< count($arr); $j++)
{
    if($arr[$j] < $arr[$min])
    {
        $min    = $j;
    }
}
if($min != 1)
{
    $t          = $arr[$min];
    $arr[$min]  = $arr[$i];
    $arr[$i]    = $t;
}

}
echo "<pre>";
print_r($arr);
echo "</pre>";