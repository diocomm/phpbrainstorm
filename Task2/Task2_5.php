//Task2_5 В массиве А(N) найти максимальный и минимальный элементы и  переставить их местами.  

$arr = array(8, 11, 19, 4, 123, 88, 7, 8, 88, 6, 11);

$max = $arr[0];
$min = $arr[0];

for($k = 0; $k < count($arr); $k++) {
  
	if ($arr[$k] > $max ) {

  		$max = $arr[$k];

  	}
  
}

for($j = 0; $j < count($arr); $j++) {

	if ($arr[$j] < $min ) {

	    $min = $arr[$j];

	}
}

for($i = 0; $i < count($arr); $i++) {
  
 	if ($arr[$i] == $max ) {

   		$arr[$i] = $min;

  	} else if ($arr[$i] == $min){

  		$arr[$i] = $max;

 	}
  
}

echo 'MAX = '.$max.'; MIN = '.$min.'<br>';

for($f = 0; $f < count($arr); $f ++) {

echo 'index = '.$f.' value = '.$arr[$f].'<br>';

}
