<?php 
$dizi=array("arif","yarci",5,7);
echo $dizi[2]."<br>";//dizideki istediğimiz indisi yazdırır..

print_r($dizi);//dizinin indisleriyle birlikte yazdırır...
echo "<br>";

$yazi=array(8,2,14,9,20,4);

echo "\$yazi dizisindeki toplam eleman sayisi :" .count($yazi)."<br>";//dizideki toplam eleman sayısını yazdırır..


/*dizideki elemanları büyükten küçüğe ya da küçükten büyüğe sıralar..*/
sort($yazi);
print_r($yazi);
echo "<br>";
rsort($yazi);
print_r($yazi);
echo "<br>";


/*dizideki en büyük ve en küçük elemanı yazdırır..*/
echo max($yazi)."<br>";
echo min($yazi)."<br>";
echo in_array(20, $yazi)."<br>";//dizide elamanın bulunup bulunmadığını kontrol eder..

/*dizideki elemanların arasına bi kelime ya da karakter koyabiliriz bu fonksiyonla..*/
echo implode("+", $yazi);
?>