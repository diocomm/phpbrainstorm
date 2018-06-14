//Task  3 24. В массиве А(N,M) в каждой строке нулевые элементы переставить  в конец строки, а остальные элементы расположить в порядке убывания.  

$a = array(2,   1,   0,  0, 0);
$b = array(6,  12,   1,  3, 2);
$c = array(11,  0,   1,  5, 3);
$d = array(0,   0,   2,  1, 8);
$e = array(8,  13,   0,  2, 0);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr); $i++) { 
	  $len = count($arr[$i]); 
    $countZer = 0;

  	for($q = 0; $q < $len; $q++) {

            if ($arr[$i][$q] == 0){
             $countZer++; 

                for ($z = $q; $z < count($arr[$i]) - 1; $z++){
                    $arr[$i][$z] = $arr[$i][$z + 1];
                } 
            $len--;
            $q--;                  
         }       
	}

	for ($j = count($arr[$i]) - 1; $j >= 0 && $countZer > 0; $j--) {
        $arr[$i][$j] = 0;
        $countZer --;
    }
}

for($i = 0; $i < count($arr) ; $i++) {  
   
  	for($q = 0; $q < count($arr[$i]); $q++) {
			
        for($l = 0; $l < count($arr[$i]) - 1; $l++) {

            if($arr[$i][$l] > $arr[$i][$l + 1] && $arr[$i][$l + 1] != 0){
                $x = $arr[$i][$l];
                $arr[$i][$l] = $arr[$i][$l + 1];
                $arr[$i][$l + 1] = $x;
            }
        }	
	  }			
}
