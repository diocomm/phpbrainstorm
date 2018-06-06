//Task2_29 Из  массива  А(N)  удалить  все  элементы,  стоящие  между  первым  минимальным и последним максимальным элементами.  

$arr = array(12, 2, 32, 4, 5, 88, 98, 19, 28, 33, -41);

$max = $arr[0];
$min = $arr[0];
//min max
for($k = 0; $k < count($arr); $k++) {
  
	if ($arr[$k] > $max ) {

  		$max = $arr[$k];

  	} else if ($arr[$k] < $min ) {

	    $min = $arr[$k];
	}  
}

for($j = 0; $j < count($arr); $j++) {

	if($arr[$j] == $min){
      $indexMin = $j;
      break;
	}
}
for($f = 0; $f < count($arr); $f++) {

    if($arr[count($arr) - $f] == $max){
        $indexMax = count($arr) - $f;
        break;
    }
}

if($indexMin > $indexMax){
    $x = $indexMax;
    $indexMax = $indexMin;
    $indexMin = $x;
}


for($i = $indexMin + 1; $i < $indexMax; $i++ ){

	unset($arr[$i]);
}
