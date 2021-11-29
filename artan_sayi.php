<?php 
//belirtilen sayı aralıgında artırma ya da eksiltme 

$sayi1=50;
$sayi2=100;
$artan=11;

for ($sayi1; $sayi1<=$sayi2; $sayi1+=$artan) {
	echo "$sayi1"."<br>";
}

for ($sayi2; $sayi2>=50; $sayi2-=$artan) { 
	echo "$sayi2"."<br>";
}
?>