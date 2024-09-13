<?php
const p=3.14;
$r= rand( min: 25, max: 500);
$s= p*$r;
$d = $r*2 ;
echo"$s";

echo "<div style='width: $d"."px; height: $d"."px; background: blue; border-radius: 50%;'></div>";

?>