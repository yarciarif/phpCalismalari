<?php 

// Do While Döngüsü

$say=0; // bu değişkene 0 sayısını atıyoruz
$tahmin=5; // bu değişkene 5 sayısını atıyoruz
$kazan=2; // bu değişkene 2 sayısını atıyoruz

do {

$sayi=rand(1,5); // 1 ile 5 arası random sayılar oluştur dedik.
	echo $sayi; echo "<br>"; // $sayi değişkenini ve br(satır atlama) ile yazdır.
	$say++; // say değişkenini birer birer artırarak yazdır.



} while ($sayi != $tahmin );  { // Sayı değişkeni tahmin değişkenine eşit değilse alttaki sonucu yazdır.
	echo "<br>";
	echo "$sayi sayınız $say. denemede bulundu."; echo "<br>";

	if ($say<=$kazan)  { // say değişkeni kazan değişkenine küçük yada eşit ise alttaki sonucu yazdır.

		echo "Tebrikler $say denemede tahmin ettiniz.";

	} else  { // yukardaki sonuçların hiçbiri olmazsa ekrana bunu yazdır.
		echo "Kaybettiniz çünkü $say denemede tahmin edemediniz.";
	}


}

 ?>