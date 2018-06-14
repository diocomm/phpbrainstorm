//Task3 25. В массиве А(N,M) расположить строки в порядке возрастания количества простых чисел в строке.   

$a = array(3,   3,     3,  3, 3);
$b = array(3,   3,    3,  3, 2);
$c = array(11,  31,   11,  2, 1);
$d = array(3,   3,    2,  1, 1);
$e = array(8,    13,    1,  2, 1);

$arr = array($a, $b, $c, $d, $e);
$arr2 = array();

	for ($k = 0; $k < count($arr); $k++){
	  	$count = 0;

      for ($f = 0; $f < count($arr[$k]); $f++){
            $flagSimple = 0;
            $num = $arr[$k][$f];

            for($h = 2; $h <= $num; $h++) {
                if ($num % $h != 0) {	
                    $flagSimple = 1;
                } else {		    	
                    break;
                }
            }

            if($flagSimple == 1){
              $count++;
            }
       }
	   	$arr2[$k] = $count;
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
