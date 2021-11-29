<?php 

//if - else if - else koşulları

/*
 SORGU KOŞULLARI;

 ==eşit ise,
 < küçük ise,
 > büyük ise,
 <= küçük yada eşit ise,
 >= büyük yada eşit ise,
 !=eşit değilse,
 and  iki koşulu sorgulatmak istiyorsanız arasına verilen terim.. Örn: ($sorgu==4 and $sorgu1==5),
 

 */

$sorgu=4;
$sorgu1=5;

if ($sorgu==4 and $sorgu1==5) { //burada yazan sorgular istenileni veriyorsa ""Evet her ikiside doğru"" ekrana yazacaktır.Eğer sorgular uymuyorsa bir sonraki aşamaya geçicektir.
echo "Evet her ikiside doğru";

}

else if ($sorgu1==6) { //burada yazan sorgular istenileni veriyorsa""Bir tanesi doğru olabilir"" ekrana yazacaktır.Eğer sorgular uymuyorsa bir sonraki aşamaya geçicektir.
	echo "Bir tanesi doğru olabilir";
}

else{

echo "Yanlış"; // Eğer if veya else if buraya kadar uygun olmadıysa ekrana son aşamadaki ""Yanlış"" yazdırılacaktır.

}

 ?>