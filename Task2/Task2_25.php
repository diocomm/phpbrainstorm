// //Task2_25 В массив А(N) вставить после первого максимального элемента  k   минимальных элементов массива.  

$arrA = array(1, 2, 3, 4, 5, 88, 98, 19, 28, 33, 11);
$arrB = array();
$p = 15;
$max = $arrA[0];
$min = $arrA[0];
//min max
for($k = 0; $k < count($arrA); $k++) {
  
	if ($arrA[$k] > $max ) {

  		$max = $arrA[$k];

  	} else if ($arrA[$k] < $min ) {

	    $min = $arrA[$k];

	}
  
}

for($i = 0; $i < count($arrA); $i++) {

	if($arrA[$i] == $max) {

		$c = 0;
		for($j = $i + 1; $j < count($arrA); $j++){
			$arrB[$c++] = $arrA[$j];
		}
	
		for($h = $i + 1; $h <= ($p + $i); $h++){
			$arrA[$h] = $min;
		}

		$b = 0;
		for($m = $h; $m < (count($arrB) + $h); $m++){
			$arrA[$m] = $arrB[$b++];
		
		}
	}
}

