// //Task2_8 В массиве А(N) поменять местами последний отрицательный элемент с максимальным элементом.  

$arr = array(88, -11, 19, 4, 3, 88, 7, -8, 88, 6, 1);

$max = $arr[0];
$lastNegativ;

for($k = 0; $k < count($arr); $k++) {
  
  if ($arr[$k] > $max) {

    $max = $arr[$k];

  }

}

for($i = count($arr); $i >= 0; $i--) {
	
    if ($arr[$i] < 0 ) {

    	$lastNegativ = $arr[$i];

		for($i = 0; $i < count($arr); $i++) {
			  
			if ($arr[$i] == $max ) {

				$arr[$i] = $lastNegativ;

			} else if ($arr[$i] == $lastNegativ){

  				$arr[$i] = $max;

  			}
  
		}
 	
 		break; 

    } 

}

for($f = 0; $f < count($arr); $f ++) {

	echo 'index = '.$f.' value = '.$arr[$f].'<br>';

}
