
// //Task2_2 Дан массив А(N). Получить массив В(N), i-элемент которого равен  среднему арифметическому первых i элементов массива  А.  

$arrA = array(1, 2, 3, 4, 3, 8, 7, 1, 8, 3, 5);
$arrB = array();

for ($i = 0; $i <= count($arrA); $i++){
	$sum = 0;

	for($k = 0; $k < $i; $k++) {

		$sum += $arrA[$k];

	}

	if($k != 0){
		$arrB[$i - 1] = $sum / $k;
	} 

}

for ($a = 0; $a < count($arrB); $a++) {

	echo $arrB[$a].' ind -'.$a.'<br>';

}
