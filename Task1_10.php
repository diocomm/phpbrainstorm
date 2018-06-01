//Task1_10   Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром. Число называется палиндромом, если его запись читается одинаково с начала и с конца.

$num = 1000;

for($i = 1; $i < $num; $i++) {

	$temp = $i;
	$rev = 0;

	while ($temp != 0) {

	  $rev = $rev * 10;
	  $rev = $rev + $temp % 10;
	  $temp = floor($temp / 10);

	}

	if($i == $rev) {

	    $numSqure = $i * $i;
	    $temp = $numSqure;
	    $rev = 0;

	    while ($temp != 0) {
	        $rev = $rev * 10;
	        $rev = $rev + $temp % 10;
	        $temp = floor($temp / 10);
	    }

	    if($numSqure == $rev){

	      echo $i.'<br>';
	    }

	} 

}
