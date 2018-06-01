//Task1_14. Парными  простыми числами называются два простых числа, разность  которых равна двум. Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел. 
	
  $limit = 110;

	for ($num = 1; $num < $limit; $num++) {
		
		$result = false;

		for($i = 2; $i < $num; $i++) {
		    if ($num % $i == 0) {
		        $result = true;     
		        break ;
		    } 
		            	                     
		}

		if(!$result){

			if(($num - $num2) == 2) {

				echo $num2.' - '.$num.'<br>';
			
			}

		$num2 = $num;
		} 

	 }
