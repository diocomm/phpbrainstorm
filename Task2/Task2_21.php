//Task2_21. В массиве А(N) выбрать без повторений все элементы, встречающиеся более одного раза.
$arr1 = array(0, 9, 1, 1, 6, 6, 3, 4, 4, 4, 4, 4, 3, 0, 4, 3);
$arr2 = array();

for($i = 0; $i < count($arr1); $i++) {
	$count = 0;
	  	for($l = 0; $l < count($arr1); $l++) {

		    	if($arr1[$l] == $arr1[$i] ){
			    	$count++;			
	    		} 
	    		if($count >= 2){
			     	array_push($arr2, $arr1[$i]);
		    	}
	  	}
}


for($i = 0; $i < count($arr2); $i++) {
	
	for($l = 0; $l < count($arr2) - 1; $l++) {

		if($arr2[$l] > $arr2[$l + 1]){
        $x = $arr2[$l];
        $arr2[$l] = $arr2[$l + 1];
        $arr2[$l + 1] = $x;
		}
	}	
}

for ($f = 0; $f < count($arr2); $f++) {
	 	 	if($arr2[$f] != $arr2[$f + 1]){

	  	echo $arr2[$f].'<br>'; 
  	}	 	
 }
