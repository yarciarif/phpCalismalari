<?php
if(isset($_POST['kullanici']) && isset($_POST['sifre'])) { // form gönderilmiş mi
   $kullanici = $_POST['kullanici'];
   $sifre = $_POST['sifre'];
 
   if(empty($kullanici) || empty($sifre)) { // gönderilenler boş mu
      echo 'Lütfen boş bırakmayın';
   } else {
      if($kullanici == 'metehan' && $sifre == 'mete1122') { // bilgiler doğru mu
         session_start();
         $_SESSION['kullanici'] = 'metehan';
         $_SESSION['sifre'] = 'mete1122';
         echo 'Giriş yaptınız! Şimdi panel.php ye girebilirsiniz. <a href="formpanel.php">Panele git.</a>';
      } else {
         echo 'Yanlış kullanıcı adı ya da şifre';
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}
?>