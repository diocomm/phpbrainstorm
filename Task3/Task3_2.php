//Task3_2. В  массиве  А(N,М)  найти  номер  строки,  среднее  арифметическое  положительных элементов которой является наименьшим.  
$a = array(1,    -2,   -3,   14,  25, 1);
$b = array(6,    7,   -8,   9, 10, 2);
$c = array(11,  12,  -13,  14, 15, 2);
$d = array(1,  -17,  -18,  -19, -20, 2);
$e = array(21,  -22,  -23,  24, -25, 2);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr[0]) - 1; $i++) {  
    $sum = 0;
  	$count = 0;
  	for($q = 0; $q < count($arr[0]); $q++) {
  		
  		if($arr[$i][$q] > 0) {
  		  	$sum += $arr[$i][$q];
  	  		$count++;
  		}  
    }
    $med = $sum / $count;
    
    if ($i == 0){
    	
      	$min = $med;
		    $index = $i;
    } else if($min > $med) {
    	
       	$min = $med;
       	$index = $i;
   	}
   	
}

 echo 'Min = '.$min.' index = '.$index.'<br>';
