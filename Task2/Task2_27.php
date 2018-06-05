//Task2_27 В  массив  А(N),  упорядоченный  по  возрастанию,  вставить   k  элементов, не нарушая его последовательности.

$arrA = array(1, 2, 3, 4, 5, 6, 88, 98, 199, 288, 336, 411);
$arrB = array();
$p = 5;//k элементов
$element = 89;

//min max


for($i = 0; $i < count($arrA); $i++) {

	if($arrA[$i] <= $element && $arrA[$i + 1] >= $element) {

		$c = 0;
		for($j = $i + 1; $j < count($arrA); $j++){//copy arrA
			$arrB[$c++] = $arrA[$j];
		}
	
		for($h = $i + 1; $h <= ($p + $i); $h++){//insert min
			$arrA[$h] = $element;
	
		}

		$b = 0;
		for($m = $h; $m < (count($arrB) + $h); $m++){// + arrB
			$arrA[$m] = $arrB[$b++];
		
		}
		break;
	}
}
