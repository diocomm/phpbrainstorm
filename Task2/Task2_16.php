//Task2_16 В  массиве  А(N)  определить  максимальную  длину последовательности равных элементов.

$arr = array(0, 0, 0, 1, 1, 1, 1 ,0, 1, 2, 2, 1, 0, 0, 1);
$count = 1;

for($i = 0; $i < count($arr); $i++){

	if ($arr[$i] == $arr[$i + 1]){
		$count++;
	} else {
		if($count > $max){
			$max = $count;
		}
		
		$count = 1;
		
	}

}

echo $max.'<br>';
