//Task3 11. В  каждой  строке  массива  А(N,М)  удалить  все  четные  положительные элементы, стоящие между первым и последним максимальными  элементами.  

$a = array(21, 2,  6,   1,   9);
$b = array(6,   2,   1,  3,   1);
$c = array(1, 31,  2,  5,  118);
$d = array(12,  8,  2,  1,  13);
$e = array(8, 13,  12,  2,  33);

$arr = array($a, $b, $c, $d, $e);


for($i = 0; $i < count($arr); $i++) {
    $arr2 = array();
    $maxFirst = $arr[$i][0];
    $indexMaxFirst = 0;	
    $indexMaxSecond = count($arr) - 1;	

    for ($j = 0; $j < count($arr[$i]); $j++) {

        if ($arr[$i][$j] > $maxFirst) {//max first
            $maxFirst = $arr[$i][$j];
            $indexMaxFirst = $j;
        } 
     }

      for($f = 0; $f < count($arr[$i]); $f++)	{
          if($arr[$i][$f] != $maxFirst) {
            $maxSecond = $arr[$i][$f];
          } 

      }

      for ($k = 0; $k < count($arr[$i]); $k++) { //max second

          if ($arr[$i][$k] > $maxSecond && $arr[$i][$k] != $maxFirst) {
              $maxSecond = $arr[$i][$k];	
              $indexMaxSecond = $k;
          } 		
      }	

      if($indexMaxFirst > $indexMaxSecond){
          $x = $indexMaxFirst;
          $indexMaxFirst = $indexMaxSecond;
          $indexMaxSecond = $x;
      }

      $countDel = $indexMaxSecond - $indexMaxFirst - 1; 

      for($x = 0; $x < $countDel; $x++) { //delete element

        for($j = $indexMaxFirst + 1; $j < count($arr[$i]) - 1; $j++){
             $arr[$i][$j] = $arr[$i][$j + 1];
        }

      }

      for($h = 0; $h < count($arr[$i]) - $countDel ; $h++){ //delete last element
            $arr2[$h] = $arr[$i][$h];
      }

      $arr[$i] = $arr2;

    }

    for($k = 0; $k < count($arr); $k++) {  //print array

        for($q = 0; $q < count($arr[$k]); $q++) {

          echo $arr[$k][$q].'   |  ';

        } 
        echo '<br>';
}
