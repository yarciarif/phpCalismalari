<?php 

for ($sayi=0; $sayi < 100 ; $sayi++) { //0'dan 100'e kadar dönecek bir for döngüsü yaptık.
	echo $sayi;//Ekrana sayı değişkenini yazdırıyoruz.
	if ($sayi == 5) {//Sayi değişkeni 5 sayısına gelince break yani işlemi durdursun diyoruz.
		break;//eğer bu seçenek eşleştiyse karşılaştırmaya devam etme anlamına gelir.
	}
}

?>