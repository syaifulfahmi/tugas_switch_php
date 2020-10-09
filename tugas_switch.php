<?php

$nilai = 0;

echo "Nilai : $nilai<br>";

switch (true) {
	case $nilai >= 80 && $nilai <= 100 :
		echo "Nilai kamu A";
		break;
	case $nilai >= 70 && $nilai < 80 :
		echo "Nilai kamu B";
		break;
	case $nilai >= 60 && $nilai < 70 :
		echo "Nilai kamu C";
		break;
	case $nilai >= 0 && $nilai < 60 :
		echo "Nilai kamu D";
		break;			
	default:
		echo "Nilai tidak valid";
		break;
}

?>