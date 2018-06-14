//22. В  массиве  А(N,M)  переставить  столбцы  в  порядке  возрастания  

$a = array(2,    9,    6,  1, 0);
$b = array(6,   12,    1,  3, 2);
$c = array(11,  31,   11,  5, -1);
$d = array(12,   8,    2,  1, 8);
$e = array(8,   13,    1,  2, -65);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr) ; $i++) {  
   
  	for($q = 0; $q < count($arr[$i]); $q++) {
			
      for($l = 0; $l < count($arr[$i]) - 1; $l++) {

          if($arr[$l][$i] > $arr[$l + 1][$i]){
              $x = $arr[$l + 1][$i];
              $arr[$l + 1][$i] = $arr[$l][$i];
              $arr[$l][$i] = $x;
          }
      }	
	 }			
}
