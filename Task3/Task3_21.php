//Task3 21. В массиве А(N,M) элементы строк расположить в порядке их возрастания.  

$a = array(2, 9,   6,  1,   9, 56, 5);
$b = array(6,  12,   1,  3,   1, 12, 7);
$c = array(11,  31,  117,  5,   5, 117, 2);
$d = array(12, 8,   2,  1,   13, 5, 2);
$e = array(-8,  -13,  1,  -2,  3, 1, 9);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr) ; $i++) {  
   
  	for($q = 0; $q < count($arr[$i]); $q++) {
			
        for($l = 0; $l < count($arr[$i]) - 1; $l++) {

            if($arr[$i][$l] > $arr[$i][$l + 1]){
                $x = $arr[$i][$l];
                $arr[$i][$l] = $arr[$i][$l + 1];
                $arr[$i][$l + 1] = $x;
            }
        }	
	  }			
}
