
//Task1_2  Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

$findNumber = 5;

for($i = 1000; $i < 9999; $i++){
  	$a = $i;
    $sum = 0;

    while ($a != 0){

	    $dig = $a % 10;
		$a = floor($a / 10);
		$sum += $dig;
	      
	}

    if ($sum == $findNumber){
        echo $i.'</br>';
    }

}
