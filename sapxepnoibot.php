<?php
$arr=[2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
for($i = 0; $i< count($arr)-1;$i++ )
{
    for($j = count($arr)-1;$j > $i;$j--)
    {
        if($arr[$j] <$arr[$j-1]){
            $t         = $arr[$j-1];
            $arr[$j-1] = $arr[$j];
            $arr[$j]   = $t;
        }
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";