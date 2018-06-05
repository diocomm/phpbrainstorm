//Task2_23 В массиве А(N) найти минимальное из чисел, встречающихся более одного раза.  

$arrA = array(0, 6, 3, 1, 7, 5, 1, 2, 0, 12);
$arrB = array(); 
$count = 0;

for($j = 0; $j < count($arrA); $j++) {
		$count = 0;
		for($i = 0; $i < count($arrA); $i++){

			if ($arrA[$j] == $arrA[$i]) {
				$count++;
			}

		}
		if($count > 1){
			array_push($arrB, $arrA[$j]);							
		}
}

$min = $arrB[0];
for($k = 1; $k < count($arrB); $k++){
	
	if($arrB[$k] < $min){
		$min = $arrB[$k];
	}
}

echo $min.'<br>';
