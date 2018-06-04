
//Task2_7. В  массиве  А(N)  найти  номер  элемента,  сумма  которого  со  следующим за ним элементом максимальна, и номер элемента, сумма которого с предыдущим элементом минимальна.  

$arr = array(1, 1, 2, 4, 3, 88, 12, 11, 8, 3, 1);

$max = $arr[0];
$min = $arr[0];

for ($n = 0; $n < count($arr); $n++){
	if($arr[$n] > $min){
		$min = $arr[$n];
	}

}

for($i = 1; $i < count($arr); $i++){

	if (($arr[$i] + $arr[$i + 1]) > $max ){
		$max = $arr[$i] + $arr[$i + 1];
		$indexMax = $i;

	} 

}

for($k = 1; $k < count($arr); $k++){

	if (($arr[$k] + $arr[$k - 1]) < $min ){
		$min = $arr[$k] + $arr[$k - 1];
		$indexMin = $k;

	}

}

echo 'Max index = '.$indexMax.'; Min index = '.$indexMin;
