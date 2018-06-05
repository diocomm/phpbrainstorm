//Task2_19 В массиве А(N) найти последний четный положительный элемент,  кратный заданному числу р, заменить его индексом и поставить в  конец  массива.  
$arr = array(0,48, 6, 0, 24, 5, 1, 0, 2);
$p = 6;

	for($j = 0; $j < count($arr); $j++){
		
 		if($arr[count($arr) - $j] % 2 == 0 && $arr[count($arr) - $j] > 0 && $arr[count($arr) - $j] % $p == 0){
 		
 			$index = count($arr) - $j;
  			$arr[count($arr) - $j] = $index;
			
			for($i = $index; $i < count($arr) - 1 ; $i++){

		 		$x = $arr[$i + 1]; 
				$arr[$i + 1] = $arr[$i];
				$arr[$i] = $x;

			}		
		break;
 		} 

 	}	
