//Task1_3 Выяснить, образуют ли цифры данного натурального числа N возрастающую последовательность.

$findNumber =  1237;
    $num = $findNumber;
	$flagDif = true;
            while (($num != 0) && $flagDif) {
                $dig1 = $num % 10;
                $num = floor($num / 10);

                $tempNum = $num;

	                while (($tempNum != 0) && $flagDif ) {
	                	$dig2 = $tempNum % 10;
	                    if ($dig2 >= $dig1) {
	                    	$flagDif = false;
	                    } 
	                    	
	                    $tempNum = floor($tempNum / 10);
	                }
            }

            if ($flagDif) {
                echo 'Образуют возрастающую последовательность '. $findNumber.'<br>';
            } else {
                echo "Не образуют возрастающую последовательность ".$findNumber;
            }
