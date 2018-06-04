/*Task2_10  В  массиве  А(N)  все  четные  элементы  заменить  максимальным  элементом,  а нечетные - минимальным.
*/

$arr = array(101, 2, 12, 4, 34, 4, 7, 8, 88, 6, 13);
$max = $arr[0];
$min = $arr[0];
for($k = 0; $k < count($arr); $k++) {
  
  if ($arr[$k] > $max ) {

    $max = $arr[$k];

  } else if ($arr[$k] < $min ) {

	    $min = $arr[$k];

	}
  
}

echo 'MAX = '.$max.'<br>'.'MIN = '.$min.'<br>';

for($j = 0; $j < count($arr); $j ++) {

	if($arr[$j] % 2 == 0){
		$arr[$j] = $max;
	} else {
		$arr[$j] = $min;
	}

}

for($f = 0; $f < count($arr); $f ++) {

echo 'index = '.$f.' value = '.$arr[$f].'<br>';

}
