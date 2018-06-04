// /*Task2_3  В массиве А(N) первый положительный элемент и последний отрицательный элемент переставить местами.  
// */
$arr = array(88, 1, 139, 4, 3, 88, -7, 1, 88, 3, -123);
$positiv;
$negativ;

for($j = 0; $j < count($arr); $j++) {
  
    if ($arr[$j] > 0) {
		
    	$positiv = $arr[$j];
		
		break;
    } 

}

for($i = count($arr); $i >= 0; $i--) {
	
    		if ($arr[$i] < 0 ) {
    			$negativ = $arr[$i];
				$arr[$i] = $positiv;
				$arr[$j] = $negativ; 
				break; 
   			} 
		}
for($f = 0; $f < count($arr); $f ++) {

echo 'index = '.$f.' value = '.$arr[$f].'<br>';

}
