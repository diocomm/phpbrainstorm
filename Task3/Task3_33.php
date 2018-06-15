//Task3 33. В  массиве  А(N,M)  расположить  элементы    строк  в  порядке  убывания. Вставить в каждую строку заданное число р, не нарушая этот порядок.  

$a = array(11,   -12,   13,   14,    4);
$b = array(-1,    1,    1,     9,    10);
$c = array(11,    2,    13,   -14,    1);
$d = array(16,    7,     1,    11,   -2);
$e = array(2,    22,    -3,    24,    2);

$arr = array($a, $b, $c, $d, $e);
$p = 5;
for($i = 0; $i < count($arr); $i++){

    for($j = 0; $j < count($arr[$i]); $j++){

        for($l = 0; $l < count($arr[$i]) - 1; $l++) {

            if($arr[$i][$l] > $arr[$i][$l + 1]){
                $x = $arr[$i][$l];
                $arr[$i][$l] = $arr[$i][$l + 1];
                $arr[$i][$l + 1] = $x;
            }
        }	
    }

}

	for($k = 0; $k < count($arr); $k++) {
		
		 for($j = 0; $j < count($arr[$k]); $j++) {
				
         if ($arr[$k][$j] <= $p && $arr[$k][$j + 1] >= $p ) {//

            $temp = $arr[$k][count($arr[$k]) - 1];

              for ($r = count($arr[$k]) - 1; $r > $j ;$r--) {
                  $arr[$k][$r] = $arr[$k][$r - 1];
              }

                $arr[$k][$j + 1] = $p;
                $arr[$k][count($arr[$k])] = $temp;		
                break;
          }
		}		
	}
