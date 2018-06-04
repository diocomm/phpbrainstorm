$arr = array(19, 10, 3, 12, -3, 18, -7, -8, 18, 6, -11, -19);	
$arrNeg = array();
$arrPos = array();
$arrOdd = array(); 
$arrEven = array(); 

for($i = 0; $i < count($arr); $i++){
	if($arr[$i] < 0){
		  array_push($arrNeg, $arr[$i]);
	} else {
	  	array_push($arrPos, $arr[$i]);
	}
  
	if($arr[$i] % 2 == 0){
  		array_push($arrOdd, $arr[$i]);
	} else {
  		array_push($arrEven, $arr[$i]);
	}


}
