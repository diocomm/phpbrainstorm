
//Task1_27 Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой простых делителей.  

$limit1 = 1;
$limit2 = 1000;
$max = 0;

for($j = $limit1; $j < $limit2; $j++) {

	$num = $j;
	$mult = 2;
	
	$sum = 0;
	while ($num > 1) {
		if ($num % $mult == 0) {
		    
		    if ($mult != $j){
		    	$sum += $mult;
		    	
		    }
		    $num /= $mult;
		} else if ($mult == 2) {
		    $mult++;
		} else {
		        $mult += 2;
		}

	}

	if ($sum > $max) {

		$max = $sum;
		$numMax = $j;
	}


}
echo 'MAX - '.$numMax;
