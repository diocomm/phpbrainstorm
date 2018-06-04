//Task2_12  В массиве А(N) найти наибольший из всех отрицательных элементов и наименьший из всех положительных.  

$arr = array(88, -11, -19, 1, -3, 88, 7, -8, 88, 6, -11);

$min = $arr[0];

for($i = 0; $i < count($arr); $i++) {

	if($arr[$i] > 0){
		continue;
	} else {
		$max = $arr[$i];
	}

}

for($k = 0; $k < count($arr); $k++) {
  
  if ($arr[$k] < 0 && $arr[$k] > $max) {

    $max = $arr[$k];

  }

}

for($k = 0; $k < count($arr); $k++) {
  
  if ($arr[$k] > 0 && $arr[$k] < $min) {

    $min = $arr[$k];

  }

}

echo 'MAX из отрицательных = '.$max.' ; MIN  из положительных = '.$min;
