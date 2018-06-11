// //Task2_34 В массиве А(N) расположить элементы в порядке возрастания, затем вставить в него новые k чисел, не нарушая упорядоченности.  

$arrA = array(0,12, 2, 32, -4, 5, 8, 8, 19, 28, 33, -1);
$p = 5;
for($k = 0; $k < count($arrA); $k++){

	for($i = 0; $i < count($arrA) - 1; $i++){

 		if($arrA[$i] > $arrA[$i + 1] ) {
			$x = $arrA[$i + 1];
			$arrA[$i + 1] = $arrA[$i];
			$arrA[$i] = $x;

		}
 	}	
}

for($t = 0; $t < $p; $t++){
	$element = rand(0, 40);
	
	for($i = 0; $i < count($arrA); $i++) {

		if ($element > $arrA[count($arrA) - 1]){	
			$arrA[count($arrA)] = $element;

		} else if ($arrA[$i] <= $element && $arrA[$i + 1] >= $element) {

			$temp = $arrA[count($arrA) - 1];
			     
			for ($r = count($arrA) - 1; $r > $i ;$r--) {
			   $arrA[$r] = $arrA[$r - 1];
			}
			     
			   $arrA[$i + 1] = $element;

			   $arrA[count($arrA)] = $temp;		
				break;
		}
		
			

	}
}
