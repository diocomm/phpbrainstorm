// Task!_13 Определить, является ли число  2n  m  симметричным, т. е. запись  числа содержит чётное количество цифр и совпадают его левая и правая  половинки.  
$num = 2002002;
$a = $num;
$count = 0;
while ($a != 0){
	    
	$dig = $a % 10;
	$a = floor($a / 10);
	$count++;

}

if($count % 2 == 0){
	$temp = $num;
	$rev = 0;

	while ($temp != 0) {

	  $rev = $rev * 10;
	  $rev = $rev + $temp % 10;
	  $temp = floor($temp / 10);

	}

	if($num == $rev) {
		echo 'Число '.$num.' симметричное';
	} 

} else {
	echo 'Число '.$num.' не симметричное';;
}