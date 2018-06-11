//Task2_5 В массиве А(N) найти максимальный и минимальный элементы и  переставить их местами.  

$arr = array(8, 1, 19, 4, 123, 88, 7, 8, 188, 6, 11);

$max = $arr[0];
$min = $arr[0];

for($k = 0; $k < count($arr); $k++) {
  
	if ($arr[$k] > $max ) {

  		$max = $arr[$k];
  		$indexMax = $k;
  	} else if ($arr[$k] < $min ) {
  		$indexMin = $k;
	   	$min = $arr[$k];

	}
  
}
		$x = $arr[$indexMax];
		$arr[$indexMax] = $arr[$indexMin];
		$arr[$indexMin] = $x; 


echo 'MAX = '.$max.'; MIN = '.$min.'<br>';

for($f = 0; $f < count($arr); $f ++) {

echo 'index = '.$f.' value = '.$arr[$f].'<br>';

}
