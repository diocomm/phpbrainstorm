//Task1_20 Найти целое число в диапазоне от N до M с наибольшей суммой  делителей. 

$limit1 = 6000;
$limit2 = 10000;
$max = 0;
for($num = $limit1; $num < $limit2; $num++){
	$sum = 0;
	for($i = 1; $i < $num; $i++){

		if($num % $i == 0){
			$sum += $i;
		}
	}

	if ($sum > $max) {

		$max = $sum;
		$numMax = $num;
	}
}
echo 'Число  с наибольшей суммой  делителей '.$numMax.'<br>';
