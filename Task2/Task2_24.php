//Task2_24 Из  всех  участков массива А(N), сплошь состоящих из нулей, выбрать самый длинный и отметить индексы его начала и конца.

$arr = array(0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0);
$max = 0;
for($i = 0; $i < count($arr); $i++){
	$count = 0;
	if($arr[$i] == 0){
		
		$j = $i;
		$ind = $i;
		while($arr[$j] == 0 && $j != count($arr)){

			$count++;		
			$j++;
			$i++;
		}

	}
		if($count > $max){
			$indexStart = $ind;
			$indexEnd = $j - 1;
			$max = $count;
		}
}

echo $max.'<br>';
echo 'Start index '.$indexStart.'<br>';
echo 'Finish index '.$indexEnd.'<br>';
