//Task3_3 В массиве А(N,М) найти максимальный и минимальный элементы  среди  всех  элементов  тех  строк,  которые  упорядочены  по  возрастанию  или по убыванию. 

$a = array(1,  2,  3, 14,  25, 27, 56, 90);
$b = array(6,  7,  8,  9, 10, 2);
$c = array(11,  12,  13,  14, 15, 19);
$d = array(1,  -17,  18,  -19, -20, 2);
$e = array(21, 22, 24, 25, 27, 40, 44,80);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr); $i++) {  
    $count = 0;
  	for($q = 0; $q < count($arr[$i]); $q++) {
  		
  		  if($arr[$i][$q] < $arr[$i][$q + 1]){
  	  		  $count++;
    		} 
		
    		if($count == count($arr[$i]) - 1){
            $min = $arr[$i][0];
            $max = $arr[$i][0];

            for($f = 0; $f < count($arr[$i]); $f++){
                if($arr[$i][$f] > $max){
                    $max = $arr[$i][$f];

                } else if ($arr[$i][$f] < $min) {
                    $min = $arr[$i][$f];
                }

            }
        
            echo 'Строка с индексом #'.$i.' '.$max.' max'.' '.$min.' min'.'<br>';
            break;
  		  }
  	}

}
