//Task2_22 В массиве А(N) найти максимальный из элементов, встречающихся только один раз.  

$arrA = array(-12, -2, -6, -3, 0, -7, -5, -5, 0, -2, -3, -12);
 
$count = 0;

for($j = 0; $j < count($arrA); $j++) {
		$count = 0;
		for($i = 0; $i < count($arrA); $i++){

			if ($arrA[$j] == $arrA[$i]) {
				$count++;
			}

		}

		if($count == 1){
				if($arrA[$j] > $max){
					$max = $arrA[$j];
				}							
		}
}

echo $max.'<br>';	
