$limit1 = 1;
$limit2 = 50000;

for($j = $limit1; $j < $limit2; $j++) {
    $num = $j;
   	$sumFact = 0;
    while ($num != 0) {

        $dig =  $num % 10;
        $num = floor($num / 10);

        $factorial = 1;
	        for($k = 2; $k <=  $dig; $k++){
	            $factorial *= $k;       
	        }

       	$sumFact += $factorial;
    } 

    if($sumFact == $j){
    	$sumNumber += $sumFact;
    	$countNumber++;
    }
}
echo 'Количество чисел = '.$countNumber.' : Сумма = '.$sumNumber.'<br>';
