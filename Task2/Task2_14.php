arr = array(19, 10, 3, 12, -3, 18, -7, -8, 18, 6, -11, -19);	
$arrNeg = array();
$arrPos = array();
$arrOdd = array(); 
$arrEven = array(); 
$k = 0;
$j = 0;
$r = 0;
$d = 0;

for($i = 0; $i < count($arr); $i++){
	if($arr[$i] < 0){
		  $arrNeg[$k] = $arr[$i];
		  $k++;
	} else {
	  	$arrPos[$r] = $arr[$i];
	  	$r++;
	}
  
	if($arr[$i] % 2 == 0){
  		$arrOdd[$j] = $arr[$i];
  		$j++;
	} else {
  		$arrEven[$d] = $arr[$i];
  		$d++;
	}

}
