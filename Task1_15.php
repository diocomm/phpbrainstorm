
//Task1_15 Определить количество различных делителей целого числа N.  

$num = 1222;
$count = 0;
for($i = 1; $i < $num; $i++){

	if($num % $i == 0){
		
		$count++;
		echo 'Делитель #'.$count.'  - '.$i.'<br>';
	}

}
echo 'Делителей - '.$count;
