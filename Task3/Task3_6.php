//Task3 6. В матрице А(N,N) найти первую строку, не содержащую отрицательных элементов, и умножить ее как вектор на матрицу А.  

$a = array(1,    12,  13,  14,  -5);
$b = array(6,    17,  -8,   9,   10);
$c = array(1,   1,  0,  1,  1);
$d = array(16,   7,   1,   119,  2);
$e = array(2,    22,  3,   24,   2);

$arr = array($a, $b, $c, $d, $e);
$flag = true;
for($i = 0; $i < count($arr); $i++) {  
      $count = 0;
      for($q = 0; $q < count($arr[$i]); $q++) {

    	 if($arr[$i][$q] >= 0){
  		  	$count++;

  		}

  		if($count == count($arr[$i]) && $flag){
          $indVector = $i;
          $flag = false;
  		}
  	}
} 

for($i = 0; $i < count($arr); $i++) { 
       $arrResult = 0; 
       
       for($q = 0; $q < count($arr[$i]); $q++) {
           $arrResult += $arr[$indVector][$q] * $arr[$i][$q];
       }
       echo '#'.$i.' - '.$arrResult.'<br>';
}
