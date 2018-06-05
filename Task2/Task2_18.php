//Task2_18 В массиве А(N) подсчитать количество различных элементов.   

$arrA = array(1, 2, 3, 4, 5, 6, 4, 3, 2, 1);
 
 $count = 0;
 $countNum = 0;


for($j = 0; $j < count($arrA); $j++) {
		$count = 0;
		for($i = 0; $i < count($arrA); $i++){

			if ($arrA[$j] == $arrA[$i]) {
				$count++;
			}

		}

		if($count == 1){
			$countNum++;
							
		}

}

echo $countNum++;	
