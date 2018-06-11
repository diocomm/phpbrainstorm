//Task1_8 Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.

for($i = 1000; $i <= 9999; $i++){
    $num = $i;
	$flagDif = true;
            while (($num != 0) && $flagDif) {
                $dig1 = $num % 10;
                $num = floor($num / 10);

                $tempNum = $num;

	                while (($tempNum != 0) && $flagDif ) {
	                	$dig2 = $tempNum % 10;
	                    if ($dig2 == $dig1) {
	                    	$flagDif = false;
	                    } 
	                    	
	                    $tempNum = floor($tempNum / 10);
	                }
            }

            if ($flagDif) {
                echo $i.'<br>';
            } 

}  
