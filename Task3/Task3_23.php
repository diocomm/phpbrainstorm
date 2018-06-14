
//Task3 23. В  массиве  А(N,M)  переставить  строки  в порядке убывания количества содержащихся в них положительных элементов.  

$a = array(-2,    -9,     -6,  -1, -2);
$b = array(6,   12,    1,  3, 2);
$c = array(11,  -31,   11,  5, -1);
$d = array(-12,   -8,    2,  -1, 8);
$e = array(8,    13,    1,  -2, 65);

$arr = array($a, $b, $c, $d, $e);
$arr2 = array();

	for ($k = 0; $k < count($arr); $k++){
      $count = 0;
      for ($f = 0; $f < count($arr[$k]); $f++){

          if($arr[$k][$f] > 0){
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

