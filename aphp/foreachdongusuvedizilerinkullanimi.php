<?php 

// Foreach Döngüsü
// Sadece diziler için kullanılabilen döngü türü


$dizi=array("Metehan","Özkan","Deneme1","Deneme2"); // 0-1-2-3 numaralarına arraydaki indisleri sıralıyor.

 // echo $dizi[0]; // Örneğin 0 numaralı indis numarasını çağırıyoruz ekrana Metehan'ı yazdırıyor.

foreach ($dizi as $key => $deger) { // dizi ve key değişkeni   değer değişkenine eşit yada büyük ise aşağıdakileri yazdır.
	echo "$key .sırada $deger var."; echo "<br>"; // key değişkeni . sırada değer değişkeni var. Örn: 0 .sırada Metehan var. diye ekrana yazdır. Örn2: $deger:metehan, $key:0(metehanın indis numarası)..
}

$bilgi['Ad']='Metehan';
$bilgi['Yas']=20;
$bilgi['Yer']='Denizli';

foreach ($bilgi as $isim => $deger) {
	echo $isim. ' : ' . $deger . ' <br> ';//Adımızı yaşımızı ve yerimizi alt alta foreach döngüsü ile yazdırdık.
}

 ?>