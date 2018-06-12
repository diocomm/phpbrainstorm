//Task 3 13. В  массиве  А(N,М)  поменять  местами  столбцы,  содержащие  максимальный и минимальный элементы. 

$a = array(21, 21,  3,   1,   1);
$b = array(6,   2, -10,  2,   3);
$c = array(12, 13,  18,  14,  15);
$d = array(12,  8,  21,  19,  30);
$e = array(-2, 34,  24,  27,  -2);

$arr = array($a, $b, $c, $d, $e);
$min = $arr[0][0];
$max = $arr[0][0];

for($i = 0; $i < count($arr); $i++) {  

  	for($f = 0; $f < count($arr[$i]); $f++){
  	  	if($arr[$i][$f] > $max){
  	    		$max = $arr[$i][$f];
	  		$indRowMax = $f;			
  		
    		} else if ($arr[$i][$f] < $min) {
      			$min = $arr[$i][$f];
	      		$indRowMin = $f; 				
     		}  		
  	}  	
}

  	for($j = 0; $j < count($arr); $j++) {
        $x = $arr[$j][$indRowMax];
        $arr[$j][$indRowMax] = $arr[$j][$indRowMin];
        $arr[$j][$indRowMin] = $x;
		
  	 }
