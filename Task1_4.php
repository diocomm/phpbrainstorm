//Task1_4 Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

for($i = 1000; $i < 9999; $i+=2) {
	$arrNumber = array();
	$num = $i;
	$a = 10;
	$b = 1;
	 while ($num > 0) {//for($k = 0; $k < 4; $k++){

        $digit = $num % $a / $b;
        $num = $num - ($num % $a);
       	array_push($arrNumber, $digit);

        $a *= 10;
        $b *= 10;

  }
  
    if ($arrNumber[0] > $arrNumber[1] && $arrNumber[1] > $arrNumber[2] && $arrNumber[2] > $arrNumber[3])  {

      	echo $i.'<br>';

  	} 
}
