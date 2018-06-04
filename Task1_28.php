// //Task1_28 Преобразовать  числа  заданной  последовательности  натуральных   чисел  n0 ,n1,...,nm так, чтобы цифры каждого числа образовывали максимально возможные числа.  
$limit1 = 1;
$limit2 = 1000;


for($j = $limit1; $j < $limit2; $j++) {
	$arr = array();
	$a = $j;

	while ($a != 0){
		    
		$dig = $a % 10;
		$a = floor($a / 10);
		array_push($arr, $dig);
	}

	for($k = 0; $k < count($arr); $k++){

		for($i = 0; $i < count($arr) -1 ; $i++){

			if($arr[$i] > $arr[$i + 1] ) {
				$x = $arr[$i + 1];
				$arr[$i + 1] = $arr[$i];
				$arr[$i] = $x;

			} 

		}

	}
	echo 'Число = '.$j.'    Max число - ';
	
	for($d = 0; $d <= count($arr); $d++){
 		echo $arr[count($arr) - $d];
 	}
	echo '<br>';
}	
