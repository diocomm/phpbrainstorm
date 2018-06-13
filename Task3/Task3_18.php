//Task 3 18. В массиве А(N,М) столбец с минимальным количеством нечетных  элементов переставить на последнее место.  

$a = array(1,   2,   3,   4,   5,  6);
$b = array(2,   2,   3,   0,   2,  6);
$c = array(2,   2,   3,   1,   3,  2);
$d = array(4,   2,   2,   5,   2,  6);
$e = array(4,   2,   2,   5,   3,  6);

$arr = array($a, $b, $c, $d, $e);
$min = count($arr);

for($i = count($arr); $i >= 0; $i--) {  
    $count = 0;
    for ($j = 0; $j < count($arr); $j++) {

        if($arr[$j][$i] % 2 != 0){
          $count++;
        }
    }	
    
		if ($count < $min && $count != 0){
			$min = $count;
			$indexMin = $i;
		}		
}

for($t = 0; $t < count($arr); $t++){
  	$arr[$t][count($arr) + 1] = $arr[$t][$indexMin];
}	

for($x = $indexMin; $x <= count($arr) + 1 ; $x++) { //delete element
			
    for($n = 0; $n < count($arr); $n++) {
        $arr[$n][$x] = $arr[$n][$x + 1];
    }
}
