//Task 3 29. В  массиве  А(N,M)  расположить  строки  так,  чтобы  сначала  шли  строки,  у  которых  положительных  элементов  больше,  чем  отрицательных,  затем  -  с  одинаковым  числом  положительных  и  отрицательных  элементов  и  последними,  чтобы  шли  строки,  имеющие  положительных  элементов меньше, чем отрицательных. 

$a = array(1,    -12,   -13,   14,   5, 2);
$b = array(-1,    -1,   -1,    9,    10, 2);
$c = array(-11,   2,   -13,   14,   -1, -2);
$d = array(16,   7,    1,   -11,   -2, 2);
$e = array(2,    -22,   3,   24,    2, 1);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr) ; $i++) {  
     $countPos = 0;
     $countNeg = 0;
      for($q = 0; $q < count($arr[$i]); $q++) {

          if ($arr[$i][$q] > 0){
             $countPos++;
          } else {
             $countNeg++;
          }
      }	

      if($countPos > $countNeg){
          $arr2[$i] = 0;

      } else if ($countNeg == $countPos){
          $arr2[$i] = 1;

      } else {
          $arr2[$i] = 2;
      }
}

	for ($i = 0; $i < count($arr); $i++){

		for ($l = $i + 1; $l < count($arr) ; $l++){

			if ($arr2[$i] >= $arr2[$l]){

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
