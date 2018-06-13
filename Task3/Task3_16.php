//Task 3 16. В массив А(N,М) вставить одномерный массив В(N), расположив его  перед  последним  столбцом,  содержащим  нулевой  элемент.  Если  такого  столбца не окажется, то вставить массив В(N) после  последнего столбца.  
$a = array(1,   3,   2,   3,   3,  1);
$b = array(4,   3,   1,   0,   2,  1);
$c = array(1,   5,   2,   1,   3,  1);
$d = array(4,   3,   2,   5,   2,  3);
$e = array(4,   3,  2,   5,   3,  1);

$arr = array($a, $b, $c, $d, $e);
$arr2 = array(7,   7,   1,   7,   7);
$flagZero = 1;
$indexInsert = count($arr) + 1;

for($i = count($arr); $i >= 0; $i--) {  
	  for ($j = 0; $j < count($arr); $j++) {
	
	    	if($arr[$j][$i] == 0 && $flagZero == 1){
			
            $flagZero = 0;
            $indexInsert = $i;

		      	for($x = count($arr); $x > $i - 1 ; $x--) { //delete element

			        	for($n = 0; $n < count($arr); $n++) {
			          		$arr[$n][$x + 1] = $arr[$n][$x];
			        	}
		       	}

	    	} 

	  }
}

for($t = 0; $t < count($arr); $t++){
		$arr[$t][$indexInsert] = $arr2[$t];
}
