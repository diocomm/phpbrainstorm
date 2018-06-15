//Task 3 34. В массиве А(N,M) переставить строки так, чтобы строка с максимальной  суммой  элементов  стала  первой  строкой,  а  остальные  строки  расположить в порядке возрастания элементов первого столбца.  


$a = array(11,   -12,   13,   14,    2);
$b = array(-1,    1,    1,     9,    10);
$c = array(1,    2,    13,   -14,    1);
$d = array(16,    7,     1,    111,   -2);
$e = array(-3,     22,   -3,    4,    2);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr); $i++){
    $sum = 0;

    for($j = 0; $j < count($arr[$i]); $j++){
        $sum += $arr[$i][$j];
    }

    if($sum > $max){
        $max = $sum;
        $index = $i;	
    } 
}

	for($k = 0; $k < count($arr[0]); $k++) {  

      $x = $arr[0][$k];
      $arr[0][$k] = $arr[$index][$k];
      $arr[$index][$k] = $x;

	}

	for ($i = count($arr) - 1; $i > 1 ; $i--){

      if ($arr[$i][0] < $arr[$i - 1][0]){

          for ($j = 0; $j < count($arr[$i]); $j++){
              $x = $arr[$i][$j];
              $arr[$i][$j] = $arr[$i - 1][$j];
              $arr[$i - 1][$j] = $x;

          }
      }	
	}	
