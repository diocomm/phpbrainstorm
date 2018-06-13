// Task 3 15. В  массиве А(N,М) удалить столбцы, все элементы которых являются простыми числами.  

$a = array(7,  3,   2,   3,   3,  3);
$b = array(4,   3,   1,   3,   3,  3);
$c = array(4,   5,  2,   3,   3,  3);
$d = array(4,  3,   2,   5,   3,  3);
$e = array(4,  3,  12,  5,   3,  3);

$arr = array($a, $b, $c, $d, $e);
$arr2 = array();
for($i = count($arr); $i >= 0; $i--) {  
	$count = 0;

	for ($j = 0; $j < count($arr); $j++) {
      $flagSimple = 0;

      $num = $arr[$j][$i];
      for($k = 2; $k <= $num; $k++) {
            if ($num % $k != 0) {	
                $flagSimple = 1;
            } else {		    	
                break;
            }
      }

      if($flagSimple == 1){
          $count++;
      }

      if($count == count($arr)){

          for($x = $i; $x < count($arr) +  1 ; $x++) { //delete element

              for($n = 0; $n < count($arr); $n++) {
                   $arr[$n][$x] = $arr[$n][$x + 1];
              }
          }
      }
	 }
}	
