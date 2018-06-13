//Task3 20. В каждой строке массива А(N,М) найти максимальный из элементов, встречающихся в строке только один раз. 

$a = array(2, 9,   6,  1,   9);
$b = array(6,  12,   1,  3,   12);
$c = array(11,  31,  117,  5,   117);
$d = array(12, 8,   2,  1,   13);
$e = array(-8,  -13,  1,  -2,  1);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr); $i++) {  
	  $max = $arr[$i][0];
   
  	for($q = 0; $q < count($arr[$i]); $q++) {
           $count = 0;
        for($j = 0; $j < count($arr); $j++){
            if($arr[$i][$q] == $arr[$i][$j]){
                $count++;
            } 
  	}
          if($count == 1){
              if($arr[$i][$q] > $max){
                   $max = $arr[$i][$q];
              }
  			  }  		
  	}
}
