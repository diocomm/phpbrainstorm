//Task2_28. Из  массива  А(N)  удалить  элементы,  стоящие  за  первым  максимальным элементом, количество цифр которых равно  k.  

$arr = array(122, 2, 3, 4122, 5, 6, 88, 98, 199, 288, 336, 411, 555,888,898,222,222,333,222,555,888,898,222,222,333,222,1111,1121);
$arrB = array();
$k = 3;//k элементов

$max = $arr[0];
for($p = 0; $p < count($arr); $p++) {
  
	if ($arr[$p] > $max ) {

  		$max = $arr[$p];
  	} 	
}

for($d = 0; $d < count($arr); $d++) {
 	$arrLimit = count($arr);
	if ($arr[$d] == $max ) {

      for($j = $d + 1; $j < $arrLimit; $j++) {
          $count = 0;
          $a = $arr[$j]; 

          while ($a != 0){
            $a = floor($a / 10);

            $count++;				
          }

        if($count == $k){
            unset($arr[$j]);

        }				
      }
  	} 	
}
