<?php 

// Rand Fonksiyonu
// Üretilen sayı 5 yada daha büyükse kazanırız.
// echo rand(1,10); fonksiyonu 1 ile 10 arasında bir tane random sayı ekrana yazar.

$uret=rand(1,10);



if ($uret>=5) { //5 ve 5den yüksek döngü oluşursa alttaki ekrana yazsın.
	echo "Tebrikler bulunan sayı $uret olduğu için kazandınız.";
}

else // Yukardaki döngü dışında bir sonuç çıkarsa alttaki ekrana yazsın. 
	echo "Maalesef bulunan sayı $uret olduğu için kaybettiniz.";
 ?>