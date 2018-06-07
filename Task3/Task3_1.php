//Task3_1. В  массиве  А(N,N)  найти  суммы  элементов,  расположенных  на  главной диагонали, ниже диагонали и выше диагонали.  
$a = array(1,    2,   3,   4,  5);
$b = array(6,    7,   8,   9, 10);
$c = array(11,  12,  13,  14, 15);
$d = array(16,  17,  18,  19, 20);
$e = array(21,  22,  23,  24, 25);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr[0]); $i++) {  
    
   for($q = 0; $q < count($arr[0]); $q++) {  
      $sum += $arr[$i][$i];  
       break;
   }  
  
}  
echo 'Главная диагональ = '.$sum.'<br>';  
$sum = 0;

for ($i = 1; $i < count($arr[0]); $i++){
    for ($j = count($arr[0]) - $i; $j < count($arr[0]); $j++){

		$sum += $arr[$i][$i];  
  	}

}
echo 'Ниже диагонали = '.$sum.'<br>';
$sum = 0;
  for ($i = 0; $i < count($arr[0]) - 1 ; $i++){
    for ($j = 0; $j < count($arr[0]) - $i - 1; $j++){

		$sum += $arr[$i][$i];  
  	}
}
echo 'Выше диагонали = '.$sum.'<br>';
