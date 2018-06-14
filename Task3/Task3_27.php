//Task 3 27. В  массиве  А(N,M)  расположить  столбцы  в  порядке  убывания  их  максимальных элементов. 

$a = array(1,    12,   13,   14,   5);
$b = array(6,    17,   8,    9,    10);
$c = array(111,   2,   13,   14,   1);
$d = array(16,   7,    1,   11,   2);
$e = array(2,    22,   3,   24,    2);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr[0]); $i++) {
    $indexNeg = 0;
    $max = $arr[0][$i];

        for($q = 0; $q < count($arr); $q++) {

            if($arr[$q][$i] > $max){
                $max = $arr[$q][$i]; 			
            }

        }
      $arr2[$i] = $max;
}

	for ($i = 0; $i < count($arr); $i++){

      for ($l = $i + 1; $l < count($arr) ; $l++){

          if ($arr2[$i] < $arr2[$l]){

              for ($j = 0; $j < count($arr[$i]); $j++){

                  $x = $arr[$j][$i];
                  $arr[$j][$i] = $arr[$j][$l];
                  $arr[$j][$l] = $x;

                  $y = $arr2[$i];
                  $arr2[$i] = $arr2[$l];
                  $arr2[$l] = $y;
              }

          }	
      }
	}
