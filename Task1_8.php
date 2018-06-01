//Task1_8 Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.

for($num = 1000; $num < 9999; $num++){

$num4 = ($num % 100) % 10; //4
$num3 = floor($num % 100 / 10);
$num2 = floor($num / 100) % 10;
$num1 = floor(floor($num / 100) / 10);



if (($num4 != $num3) && 
	($num2 != $num1) && 
	($num4 != $num2) &&
	($num3 != $num1) &&
	($num2 != $num3) &&
	($num1 != $num4) ) {

	echo $num.'<br>';
}

}
