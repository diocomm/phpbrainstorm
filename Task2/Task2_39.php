//Task2_39. В массиве А(N) встречаются лишь числа от 1 до 20. Упорядочить  элементы массива в порядке частоты встречаемости чисел. 

$arr1 = array(0, 9, 1, 1,6,6,3,4,4,4,4,4,3,4,3,71,71,71);
$arr2 = array();

for($i = 0; $i < count($arr1); $i++) {
	$count = 0;
	for($l = 0; $l < count($arr1); $l++) {

		if($arr1[$l] == $arr1[$i] ){
			$count++;
				
		}		
	}
	array_push($arr2, $count);
}

for($k = 0; $k < count($arr2); $k++){

	for($i = 0; $i < count($arr2) - 1 ; $i++){

		if($arr2[$i] < $arr2[$i + 1]){
        $x = $arr2[$i + 1];
        $y = $arr1[$i + 1];
        
        $arr2[$i + 1] = $arr2[$i];
        $arr1[$i + 1] = $arr1[$i];
        
        $arr2[$i] = $x;
        $arr1[$i] = $y;
		}
	}
}

for ($f = 0; $f < count($arr1); $f++) {
	 		
 	if($arr1[$f] != $arr1[$f + 1]){

		echo $arr1[$f].'<br>';
	 		
 	}
	 	
}
