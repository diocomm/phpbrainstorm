//Task2_13 В  массиве  А(N)  найти  два  наименьших  элемента  и  два  наибольших элемента.  

		$arr = array(190, 190, 19, 19, -3, 188, -700, -8, 188, 6, -11, -190);	
	

		$maxFirst = $arr[0];
		$minFirst = $arr[0];
		
		for ($i = 1; $i < count($arr); $i++) {

			if ($arr[$i] > $maxFirst) {

					$maxFirst = $arr[$i];
			}	else if ($arr[$i] < $minFirst ) {

			  		$minFirst = $arr[$i];
					
			}
		}
		//max

		$maxSecond = $arr[0];
		
		for($j = 0; $j < count($arr); $j++){
			if($arr[$j] == $maxFirst && $j != count($arr) - 1 ) {
				
				$maxSecond = $arr[$j + 1];

			} else {
				break;
			}
		}

		for ($k = 1; $k < count($arr); $k++) {
						
			if ($arr[$k] > $maxSecond && $arr[$k] != $maxFirst) {
				$maxSecond = $arr[$k];				
			} 						
		}

		//min
		
		$minSecond = $arr[0];
		
		for($d = 0; $d < count($arr); $d++) {
			if($arr[$d] == $minFirst && $d != count($arr) - 1) {
				$minSecond = $arr[$d + 1];
				
			} else {
				break;
			}

		}

		for ($m = 1; $m < count($arr); $m++) {
						
			if ($arr[$m] < $minSecond && $arr[$m] != $minFirst) {
				$minSecond = $arr[$m];				
			} 

		}



echo 'MAX1 = '.$maxFirst.'; MAX2 = '.$maxSecond.'<br>';	

echo 'MIN1 = '.$minFirst.'; MIN2 = '.$minSecond;	
