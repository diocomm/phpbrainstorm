$arrA = array(8, 11, 19, -4, 123, 88, 18, 99, 88, 6, 11);

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
	
		for($h = $i + 1; $h <= ($p + $i); $h++){//insert min
			$arrA[$h] = $min;
		}
	}
}
