//Task1_22 22. Натуральное число N разложить на простые множители.  

$findNumber = 1568;

$num = $findNumber;
$mult = 2;

while ($num > 1) {
	    if ($num % $mult == 0) {
	        echo $mult.'<br>';
	        $num /= $mult;
	    } else if ($mult == 2) {
	        $mult++;
	    } else {
	        $mult += 2;
	    }
}
