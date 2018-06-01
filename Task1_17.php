
//Task1_17 17. Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.   

$num1 = 120;
$num2 = 140;

while($num1 != $num2){

	if($num1 > $num2){
		$num1 = $num1 - $num2;
	} else {
		$num2 = $num2 - $num1;
	}

}

echo $num2;
