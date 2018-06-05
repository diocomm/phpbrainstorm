//Task1_6  Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.

$arr1 = array(2,3,7,0);
$arr2 = array(2,3,7);

	for($i = 0; $i < count($arr2); $i++) {
	
		for($l = 0; $l < count($arr1); $l++) {

			if($arr1[$l] == $arr1[$i]){
				continue;

			} 
				
				for($k = 0; $k < count($arr1); $k++) {

					if($arr1[$k] == $arr1[$l] || $arr1[$k] == $arr1[$i]) {
						continue;

					} 

					for($j = 0; $j < count($arr1); $j++){

						if($arr1[$j] == $arr1[$l] || $arr1[$j] == $arr1[$i] || $arr1[$j] == $arr1[$k]) {
							continue;

						} 
							echo $arr2[$i];
							echo $arr1[$l];
							echo $arr1[$k];
							echo $arr1[$j].'<br>';
					 							
					}
								
				}

		}
			
	}
