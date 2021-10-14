<?php
$mang =[5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
for($i = 1 ; $i< count($mang) ; $i++)
{
   $j = $i -1;
   $t = $mang[$i];
   while($t < @$mang[$j] && $j >= 0 )
   {
       $mang[$j+1] = $mang[$i];
       $j--;
   }
   $mang[$j+1] = $t ;
}
echo "<pre>";
print_r($mang);
echo "</pre>";