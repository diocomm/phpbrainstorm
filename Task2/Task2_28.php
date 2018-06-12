//Task2_28. Из  массива  А(N)  удалить  элементы,  стоящие  за  первым  максимальным элементом, количество цифр которых равно  k.  

$arr = array(122, 2, 3, 4121, 5, 6, 88, 98, 199, 288, 336, 411, 555,888,898,222,222,333,222,555,888,898,222,222,333,222,1111,1121);
$arrB = array();
$n = 3;//k элементов

$max = $arr[0];
$indexMax = 0;

for($p = 0; $p < count($arr); $p++) {
  
	if ($arr[$p] > $max ) {
 		$max = $arr[$p];
  		$indexMax = $p;
  		
  	} 	
}
	$countArr = count($arr);

 	for($j = $indexMax + 1; $j < $countArr; $j++){		
 		$count = 0;
		$a = $arr[$j]; 
	
	  	while ($a != 0){
			$a = floor($a / 10);
			$count++;				
		}
		
		if($count == $n){
			$countDel++;
			$countArr--;

			for($i = $j; $i < $countArr; $i++) {
            			$arr[$i] = $arr[$i + 1];        		
     	 		}

     	 		$j--;
		}
	}

for($h = 0; $h < count($arr) - $countDel; $h++){
	$arr2[$h] = $arr[$h];
}

$arr = $arr2;
