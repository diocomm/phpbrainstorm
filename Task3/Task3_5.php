//Task3 5. В массиве А(N,М) найти сумму элементов тех столбцов, все элементы которых кратны заданному числу р.  

$a = array(2,  2,  3, 1,  1,  1);
$b = array(6,  8,  9,  9, 10, 2);
$c = array(12, 12,  18, 14, 15, 13);
$d = array(12,  18,  21, 19, 20, 12);
$e = array(22, 22, 24, 27, 27,  40);

$arr = array($a, $b, $c, $d, $e);
$p = 2;

for($i = 0; $i < count($arr[0]); $i++) {  
      $count = 0;
     	for($q = 0; $q < count($arr); $q++) {
      		$sum = 0;

          if($arr[$q][$i] % $p == 0){ 			
              $count++;
          }

  		    if($count == count($arr) - 1){
  			
              for($f = 0; $f < count($arr); $f++){
                  $sum += $arr[$f][$i];
              }
  		  	echo 'Сумма = '.$sum.' '.' Столбец #'.$i.'<br>';
  	    	}
  		
  	  }

}
