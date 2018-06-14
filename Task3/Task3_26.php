//Task 3 26. В массиве А(N,M) переместить нулевые строки в конец массива.  

$a = array(1,    0,   0,   0,  0,  0);
$b = array(0,    0,   0,   0,  0,  0);
$c = array(1,    31,  2,   5,  11, 8);
$d = array(0,    0,   0,   0,  0,  0);
$e = array(1,    0,   0,   0,  0,  0);

$arr = array($a, $b, $c, $d, $e);
$countZer = 0;
for($i = count($arr) - 1; $i >= 0; $i--) {  
  	$count = 0;
	
      for($q = 0; $q < count($arr[$i]); $q++) {

          if($arr[$i][$q] == 0) { 
            $count++;
          }  
      }

    if($count == count($arr[$i])){
    	    	
    	 for($x = $i; $x < count($arr[$i]) - 1 ; $x++) { 
			
          for($j = 0; $j < count($arr[$i]); $j++){
                $arr[$x][$j] = $arr[$x + 1][$j];
          }
		 }
		 $countZer++;	
    }
}
	for($q = count($arr) - $countZer; $q < count($arr) + 1; $q++) {
  		
		for ($j = count($arr[$q]) - 1; $j >= 0 ; $j--) {
	        $arr[$q][$j] = 0;	         
	    }	
	}

