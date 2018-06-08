//Task2_13 В  массиве  А(N)  найти  два  наименьших  элемента  и  два  наибольших элемента.  

	$arr = array(22, 21, 14, 19, 3, 10, 7, 8, 18, 6, 11);	
	
	$maxFirst = $arr[0];
	$minFirst = $arr[0];
		
	for ($i = 0; $i < count($arr); $i++) {

		if ($arr[$i] > $maxFirst) {
			$maxFirst = $arr[$i];
			
		} else if ($arr[$i] < $minFirst ) {
			  $minFirst = $arr[$i];					
		}
	}
	
	for($j = 0; $j < count($arr); $j++)	{
		if($arr[$j] != $maxFirst) {
			$maxSecond = $arr[$j];

		} else if($arr[$j] != $minFirst) {
			$minSecond = $arr[$j];
		}
			
		}

		for ($k = 0; $k < count($arr); $k++) {
						
			if ($arr[$k] > $maxSecond && $arr[$k] != $maxFirst) {
				$maxSecond = $arr[$k];	

			} else if ($arr[$k] < $minSecond && $arr[$k] != $minFirst) {
				$minSecond = $arr[$k];				
		} 			
	}

echo 'MAX1 = '.$maxFirst.'; MAX2 = '.$maxSecond.'<br>';	

echo 'MIN1 = '.$minFirst.'; MIN2 = '.$minSecond;	
