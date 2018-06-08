//Task2_11 В массиве А(N) найти первый отрицательный элемент, предшествующий максимальному элементу, и последний положительный элемент,  стоящий за минимальным элементом.  


$arr = array(40, 1, 12, -4, 340, 4, -7, -8, 1, -88, 6);
$max = $arr[0];
$min = $arr[0];
for($k = 0; $k < count($arr); $k++) {
  
    if ($arr[$k] > $max ) {
     	$max = $arr[$k];
     	$indexMax = $k;

    } else if ($arr[$k] < $min ) {
	 $min = $arr[$k];
	 $indexMin = $k;
    }
  
}

for($j = 0; $j < count($arr); $j++) {
  
    if ($arr[$j] < 0 && $flagN == 0 && $indexMax > $j) {		
    	$flagN = 1;
    	$negativ = $j;
    } 
	
    if($arr[$k] > 0 && $flagP == 0 && $indexMin < $k){
    	$flagP = 1;
    	$positiv = $k;
    }
		   
    if($flagN == 1 && $flagP == 1 ){
    	break;
    }

    $k--;
}

echo 'Первый отрицательный элемент - '.$arr[$negativ].'<br>';
echo 'Последний положительный элемент - '.$arr[$positiv].'<br>';
