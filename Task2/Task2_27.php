$arrA = array(10, 20, 30, 40, 50, 60, 88, 90, 99, 288, 336, 411);
$arrB = array();
$p = 2;//k элементов
$element = 23;

for($i = 0; $i < count($arrA); $i++) {

	if($arrA[$i] <= $element && $arrA[$i + 1] >= $element) {

		for($n = 0; $n < $p; $n++){
			$c = count($arrA) - 1;
			for($j = $c; $j >= $i + 1; $j--) {

				$arrA[$j + 1] = $arrA[$j];
				$arrA[$j] = $element;
			}
		}	

		 break;
	}
	
}
