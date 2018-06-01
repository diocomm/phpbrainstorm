
// //Task1_19. Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.  

 $a = 126;
 $b = 70; 

$num1 = $a;
$num2 = $b;

while($num1 != $num2){

	if($num1 > $num2){
		$num1 = $num1 - $num2;
	} else {
		$num2 = $num2 - $num1;
	}

}

echo ($a * $b) / $num2;
