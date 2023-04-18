<?php

$år = date("Y");

$navn1 = "Oscar";
$navn2 = "Ludvig";
$navn3 = "Beate";

$født1980 = "1980";
$født2003 = "2003";
$født2007 = "2007";

$sum1 = $år - $født1980;
$sum2 = $år - $født2003;
$sum3 = $år - $født2007;
$sum4 = $født2003 - $født1980;
$sum5 = $født2007 - $født1980;
$sum6 = $født1980 - $født2003;
$sum7 = $født2007 - $født2003;
$sum8 = $født1980 - $født2007;
$sum9 = $født2003 - $født2007;

echo "alderen til Oscar er $sum1 år <br>";
echo "alderen til Ludvig er $sum2 år <br>";
echo "alderen til Beate er $sum3 år <br>";
echo "<br>";
echo "Oscar er $sum4 år eldere en Ludvig og $sum5 år eldere en Beate <br>";
echo "Ludvig er $sum6 år ungere en Oscar og $sum7 år eldere en Beate <br>";
echo "Beate er $sum8 år ungere en Oscar og $sum9 år ungere en Ludvig <br>";

?>