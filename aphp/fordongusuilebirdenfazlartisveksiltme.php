<?php 

// for döngüsü ile birden fazla artış ve eksiltme işlemleri
// 0 dan yüze ikişerli saydırma
// 200 den geriye 5 erli eksiltme
// $i=$i+2 ile $i+=2 arasında hiçbir fark yoktur.

for ($i=0; $i<=100 ; $i=$i+2) { 
	
	echo $i." ";

}

echo "<br>";
echo "<br>";

for ($x=200; $x>=0 ; $x=$x-5) {  // >= Büyükse sıfırdan devam etsin sıfıra kadar devam etsin ve bitirsin.

	echo $x." ";
}

 ?>