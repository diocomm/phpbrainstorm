//Task3 9. Элементы  столбцов  целочисленного  массива  А(N,М),  не  содержащих положительных элементов, заменить суммой их цифр.  

$a = array(2,  -21,  3,   1,  -1,   1);
$b = array(6,  -82,  9,   9,  -10,  2);
$c = array(12, -13,  18,  14, -15,  13);
$d = array(12, -18,  21,  19, -20,  12);
$e = array(22, -22,  24,  27, -27,  40);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr[0]); $i++) {  
      $count = 0;
      for($q = 0; $q < count($arr); $q++) {

          if($arr[$q][$i] < 0){ 			
             $count++;
          }

  	    	if($count == count($arr)){
  			
              for($f = 0; $f < count($arr); $f++){
                  $a = $arr[$f][$i] * (-1);
                  $sum = 0;

                  while($a != 0){
                      $dig = $a % 10;
                      $a = floor($a / 10);
                      $sum += $dig;
                  }
                  $arr[$f][$i] = $sum;
              }
  		    }		
  	  }
}
