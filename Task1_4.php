//Task1_4 Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

for($i = 1000; $i <= 9999; $i += 2){
    $num = $i;
	$flagDif = true;
            while (($num != 0) && $flagDif) {
                $dig1 = $num % 10;
                $num = floor($num / 10);

                $tempNum = $num;

	                while (($tempNum != 0) && $flagDif ) {
	                	$dig2 = $tempNum % 10;
	                    if ($dig2 <= $dig1) {
	                    	$flagDif = false;
	                    } 
	                    	
	                    $tempNum = floor($tempNum / 10);
	                }
            }

            if ($flagDif) {
                echo $i.'<br>';
            } 

} 
