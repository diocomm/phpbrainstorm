// //Task2_8 В массиве А(N) поменять местами последний отрицательный элемент с максимальным элементом.  

$arr = array(8, -11, 19, 4, 3, 188, 7, -8, 154, 6, 1);

$max = $arr[0];
$lastNegativ;
$i = count($arr) - 1;
for($k = 0; $k < count($arr); $k++) {
  
  	if ($arr[$k] > $max) {

   		$max = $arr[$k];
   	 	$indexMax = $k;
 	}

	if ($arr[$i] < 0 && $flagLast == 0){
    	$flagLast = 1;
    	$indexLast = $i;
    }

    $i--;
}
	$x = $arr[$indexLast];
	$arr[$indexLast] = $arr[$indexMax];
	$arr[$indexMax] = $x; 
	

for($f = 0; $f < count($arr); $f ++) {

	echo 'index = '.$f.' value = '.$arr[$f].'<br>';

}
