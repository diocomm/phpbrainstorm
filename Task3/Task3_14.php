//Task3 14. В массиве А(N,М) удалить нулевые строки.  

$a = array(0,    0,   0,   0,  0,  0);
$b = array(0,    0,   0,   0,  0,  0);
$c = array(1,    31,  2,   5,  11, 8);
$d = array(0,    0,   0,   0,  0,  0);
$e = array(0,    0,   0,   0,  0,  0);

$arr = array($a, $b, $c, $d, $e);
for($i = count($arr); $i >= 0; $i--) {  
  	$count = 0;

  	for($q = 0; $q < count($arr[$i]); $q++) {
  		
        if($arr[$i][$q] == 0) { 			
            $count++;
        }  
    }

      if($count == count($arr[$i])){

         for($x = $i; $x < count($arr[$i]) - 1 ; $x++) { //delete element
            for($j = 0; $j < count($arr[$i]); $j++){
                $arr[$x][$j] = $arr[$x + 1][$j];
            }
         }
     }
}
