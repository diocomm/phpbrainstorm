//Task3 10. В каждой строке массива А(N,М) найти и удалить максимальные  элементы.


$a = array(21, 2,  36,   1,   1);
$b = array(6,   2, 10,  2,   3);
$c = array(112, 13,  18,  14,  115);
$d = array(12,  8,  21,  19,  130);
$e = array(-2, 34,  124,  27,  -2);

$arr = array($a, $b, $c, $d, $e);
$indRowMax = 0;

for($i = 0; $i < count($arr); $i++) {
$arr2 = array();  
$max = $arr[$i][0];

  	for($f = 0; $f < count($arr[$i]); $f++){

        if($arr[$i][$f] > $max){
            $max = $arr[$i][$f];
            $indRowMax = $f;			 		
        } 
  		
  	}  	

	for($j = $indRowMax; $j < count($arr) - 1; $j++){
		  $arr[$i][$j] = $arr[$i][$j + 1];
	}

	for($h = 0; $h < count($arr) - 1; $h++){
		  $arr2[$h] = $arr[$i][$h];
	}

	$arr[$i] = $arr2;

}
