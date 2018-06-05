 // Task2.20. В  массиве  А(N)  выбрать  все  элементы,  встречающиеся  только  один раз. 

$arrA = array(0, 2, 6, 3, 0, 5, 5, 5, 0, 2, 3, 8);
 

 $count = 0;
 


for($j = 0; $j < count($arrA); $j++) {
		$count = 0;
		for($i = 0; $i < count($arrA); $i++){

			if ($arrA[$j] == $arrA[$i]) {
				$count++;
			}

		}

		if($count == 1){
			echo $arrA[$j].'<br>';					
		}

}
