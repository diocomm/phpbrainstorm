//Task2_25 В массив А(N) вставить после первого максимального элемента  k   минимальных элементов массива.  

$arrA = array(8, 11, 19, -4, 123, 88, 18, 99, 88, 6, 11);
$arrB = array();
$p = 5;
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
		for($j = $i + 1; $j < count($arrA); $j++){//copy arrA
			$arrB[$c++] = $arrA[$j];
		}
	
		for($h = $i + 1; $h <= ($p + $i); $h++){//insert min
			$arrA[$h] = $min;
		}

		$b = 0;
		for($m = $h; $m < (count($arrB) + $h); $m++){// + arrB
			$arrA[$m] = $arrB[$b++];
		
		}
	}
}
