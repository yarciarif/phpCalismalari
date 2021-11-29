<?php 

$not=5;//Buradaki rakamı 1den 5'e kadar değiştirirseniz aşağıdaki sonuçlardan birini ekrana yazdırırsınz.

switch ($not) {

	case '5':

		echo "Takdir aldınız";

		break;

		case '4':

			echo "Teşekkür aldınız";

			break;

			case '3':

				echo "Ortalama ile geçtiniz";

				break;

				case '2':

					echo "Zorla kıl payı geçtiniz";

					break;

	default://2,3,4,5 dışında bir sonuç verirseniz burdaki alan geçerli olacaktır.

	echo "Sınıfta Kaldınız";

		break;
}

/*	
if ($not==3) {
	echo "Orta ile geçtiniz";
}
if ($not==2) {
	echo "Zor kıl payı geçtiniz";
}
*/


 ?>