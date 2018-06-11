//Task1_23 Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры  
//следовали в порядке возрастания.
$num =  16271;

$dig1 = $num % 10;
 	$num = floor($num / 10);

	while ($num != 0){
		  
		if (($num % 10) > ($dig1 % 10)){

		   	$dig1 = $dig1 * 10 + $num % 10;
		       
		    } else {

				while (($num % 10 < $dig1 % 10) && ($dig1 >= 0)){ 
						     
					$num2 = $num2 * 10 + $dig1 % 10;
					$dig1 = floor($dig1 / 10);
						       
				}
				   	$dig1 = $dig1 * 10 + $num % 10;

 				while ($num2 != 0){
						    
					$dig1 = $dig1 * 10 + $num2 % 10;
					$num2 = floor($num2 / 10);
				}  
		    }
		    $num = floor($num / 10);
		
}

echo $dig1.'<br>';
