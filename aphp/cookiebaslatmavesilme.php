<?php 

setcookie("çerezim", "selam dünya");//Örnekte çerezim adında bir cookie oluşturduk ve değerinide selam dünya yaptık.


setcookie("çerezim", "selam dünya");
setcookie("çerezim", "merhaba dünya");//Cookie değerini değiştirmek

echo $_COOKIE['çerezim'];//Çerez kullanımı

echo isset($_COOKIE['olmayan']);//Cookie tanımlanmış mı diye bakmak
//Ekranda bir şey yazmaz, FALSE değeri döner. Çünkü böyle bir çerez tanımlamadık. Tanımlanmış bir çerez olsaydı ekranda olumlu manada 1 yazardı.


setcookie("çerezim", "selam dünya", time() - 3600);//Bu çereze time() – 3600 diyerek 1 saat öncesini gösterdik ve çerez silinmiş oldu.
//Bu son şey tüm çerezleri siliyor o yüzden diğer kodlar çalışmaz diğerleri çalışması için bunu silip öyle deneyiniz..
?>