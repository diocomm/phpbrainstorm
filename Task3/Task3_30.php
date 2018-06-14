//Task 3 30. В  массиве  А(N,M)  расположить  строки  по  убыванию  значений  максимальных элементов строк.  

$a = array(11,    -12,   13,   14,   5, 2);
$b = array(-1,    -1,   1,    9,    10, 2);
$c = array(-11,   2,   13,   14,   -1, 2);
$d = array(16,   7,    1,   -11,   -2, 20);
$e = array(2,    22,   3,   24,    2, 1);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr); $i++) {
	$max = $arr[$i][0];

  	for($q = 0; $q < count($arr[$i]); $q++) {

  		if($arr[$i][$q] > $max){
  			$max = $arr[$i][$q]; 			
  		}

  	}
  	$arr2[$i] = $max;
}

for ($i = 0; $i < count($arr); $i++){

		for ($l = $i + 1; $l < count($arr) ; $l++){

			if ($arr2[$i] > $arr2[$l]){

				for ($j = 0; $j < count($arr[$i]); $j++){
				 
					  $x = $arr[$i][$j];
					  $arr[$i][$j] = $arr[$l][$j];
					  $arr[$l][$j] = $x;

					  $y = $arr2[$i];
					  $arr2[$i] = $arr2[$l];
					  $arr2[$l] = $y;
				}

			}	
		}
}	
