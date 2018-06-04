//Task1_23 Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры  
//следовали в порядке возрастания.

$arr = array();
$a = 2142903;

while ($a != 0){
	    $dig = $a % 10;
	    $a = floor($a / 10);
		  array_push($arr, $dig);
}

for($k = 0; $k < count($arr); $k++){

		  for($i = 0; $i < count($arr) - 1 ; $i++){
    
          if($arr[$i] > $arr[$i + 1] ) {
              $x = $arr[$i + 1];
              $arr[$i + 1] = $arr[$i];
              $arr[$i] = $x;
			    } 
    	}  
 }

 for($d = 0; $d < count($arr); $d++){
 	echo $arr[$d];
 }
