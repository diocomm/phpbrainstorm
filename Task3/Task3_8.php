//Task3 8 В  каждой  строке  массива  А(N,М)  поменять  местами  максимальный и минимальный элементы. 

$a = array(1,    12,   13,   14,  5);
$b = array(6,    17,   8,   9, 10);
$c = array(11,  12,  13,  14, 15);
$d = array(16,  7,  1,  119, 2);
$e = array(2,  22,  3,  24, 2);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr); $i++) {  

      $min = $arr[$i][0];
      $max = $arr[$i][0];
      $indMax1 = $i;
      $indMax2 = 0;
      $indMin1 = $i;
      $indMin2 = 0;

      for($f = 0; $f < count($arr[$i]); $f++){
          if($arr[$i][$f] > $max){
             $max = $arr[$i][$f];
          $indMax1 = $i;
             $indMax2 = $f;

        } else if ($arr[$i][$f] < $min) {
            $min = $arr[$i][$f];
        $indMin1 = $i;
            $indMin2 = $f;
        }

      }

  	$x = $arr[$indMax1][$indMax2];
   	$arr[$indMax1][$indMax2] = $arr[$indMin1][$indMin2];
   	$arr[$indMin1][$indMin2] = $x; 

}
