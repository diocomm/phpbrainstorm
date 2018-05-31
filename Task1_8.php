//Task7_1 Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

  $findNumber = 10289834;
	$arrNumber = array();
	$num = $findNumber;
	$a = 10;
	$b = 1;
	$result;
	
	while ($num > 0) {

        $digit = $num % $a / $b;
        $num = $num - ($num % $a);


       	array_push($arrNumber, $digit);

        $a *= 10;
        $b *= 10;

  	}


  	for($k = 0; $k < count($arrNumber); $k++){
  	    $count = 0;
  			
			
			  for($i = 0; $i < count($arrNumber); $i++){

				  if(($arrNumber[$k] == $arrNumber[$i])) {

					  $count++;
				} 

		}	

			if ($count >= 2){
					$result = "Есть";
					break;
			} else {
				$result = "Нет";
			}

	}

echo 'Есть ли в записи натурального числа '.$findNumber.' двe одинаковые цифры? '.$result;
