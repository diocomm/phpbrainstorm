$a = array(100,    12,   13,   14,  5);
$b = array(60,    17,   8,   9, 10);
$c = array(11,  12,  13,  14, 15);
$d = array(16,  7,  1,  119, 2);
$e = array(2,  22,  3,  24, 200);

$arr = array($a, $b, $c, $d, $e);

$max1 = $arr[count($arr[0]) - 1][count($arr[0]) - 1];
$indDown1 = count($arr[0]) - 1;
$indDown2 = count($arr[0]) - 1;

for ($i = 1; $i < count($arr[0]); $i++){
        for ($j = count($arr[0]) - $i; $j < count($arr[0]); $j++){

		if($arr[$i][$j] > $max1){
			
			$max1 = $arr[$i][$j];
			$indDown1 = $i;
			$indDown2 = $j;
 
		}
  	 }
  	
}

$max2 = $arr[0][0];
$indTop1 = 0;
$indTop2 = 0;
for ($i = 0; $i < count($arr[0]) - 1 ; $i++){

        for ($j = 0; $j < count($arr[0]) - $i - 1; $j++){
 	
	  	if($arr[$i][$j] > $max2){

			$max2 = $arr[$i][$j];
			$indTop1 = $i;
			$indTop2 = $j;
		}
	}
}
 	$x = $arr[$indDown1][$indDown2];
 	$arr[$indDown1][$indDown2] = $arr[$indTop1][$indTop2];
 	$arr[$indTop1][$indTop2] = $x; 
