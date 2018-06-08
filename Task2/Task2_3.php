// /*Task2_3  В массиве А(N) первый положительный элемент и последний отрицательный элемент переставить местами.  
// */
$arr = array(-1, 77, 139, 4, 3, 88, -77, 1, 88, 10, 124);
$k = count($arr) - 1;

for($j = 0; $j < count($arr); $j++) {
  
    if ($arr[$j] > 0 && $flagP == 0) {		
    	$flagP = 1;
    	$positiv = $j;
    } 
	
    if($arr[$k] < 0 && $flagN == 0){
    	$flagN = 1;
    	$negativ = $k;
    }
		   
    if($flagN == 1 && $flagP == 1 ){
	$x = $arr[$negativ];
	$arr[$negativ] = $arr[$positiv];
	$arr[$positiv] = $x; 
    	break;
    }

    $k--;
}
