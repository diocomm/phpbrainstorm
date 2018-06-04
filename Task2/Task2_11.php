//Task2_11 В массиве А(N) найти первый отрицательный элемент, предшествующий максимальному элементу, и последний положительный элемент,  стоящий за минимальным элементом.  


$arr = array(10, -2, -12, -4, 340, 4, 7, 8, -1, 88, -6);
$max = $arr[0];
$min = $arr[0];

for($k = 0; $k < count($arr); $k++) {
  
  if ($arr[$k] > $max ) {

    	$max = $arr[$k];
    	$indexMax = $k;

  } else if ($arr[$k] < $min ) {

	    $min = $arr[$k];
		$indexMin = $k;
	}
  
}

for($i = 0; $i < $indexMax; $i++){

	if($arr[$i] < 0){
		echo 'Первый отрицательный элемент - '.$arr[$i].'<br>';
		break;
	} 

}

for($j = count($arr); $j >= $indexMin - 1 ; $j--){

	if($arr[$j] > 0){
		echo 'Последний положительный элемент - '.$arr[$j].'<br>';
		break;
	} 

}
