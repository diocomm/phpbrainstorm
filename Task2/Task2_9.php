/*Task2_9 В  массиве  А(N)  найти  максимальный  среди  четных  элементов  и  минимальный среди нечетных.   
*/

$arr = array(11, 31, 5, 3, 11, 5, 71, 7, 83, 7, 122);
$max = 'четных элементов нет';
$min = 'нечетных элементов нет';

for($j = 0; $j < count($arr); $j++)	{
	if($arr[$j] % 2 == 0) {
		$max = $arr[$j];
	} 
	if($arr[$j] % 2 != 0 ) {
		$min = $arr[$j];			
	} 
			
}

for($k = 1; $k < count($arr); $k++) {
  
 	if ($arr[$k] >= $max && $arr[$k] % 2 == 0) {
   		$max = $arr[$k];

  	} else if ($arr[$k] <= $min && $arr[$k] % 2 != 0 ) {
	    $min = $arr[$k];
	}
  
}

echo 'MAX четный = '.$max.'<br>'.'MIN нечетный = '.$min;
