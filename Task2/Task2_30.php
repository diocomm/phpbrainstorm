//Task2_30 Вычислить  значение  многочлена  и  его  первой  производной  в  заданной точке x (коэффициенты хранятся в массивах).  

//y = 2x^4 - x^3 - 3x^2 + 6
$n = 4;//степень
$x = 4;
$nPow = $n;
$arr1 = array(2, -1, -3, 0, 6);
$result = 0;

for ($i = 0; $i <= $n; $i++){	
	  $result = $result * $x + $arr1[$i];	
}

$proisvod = 0;

for ($i = 0 ; $i < $n ; $i++){
  	$proisvod = $proisvod * $x + $arr1[$i] * ($nPow--);
}

echo 'значение  многочлена = '.$result.'<br>';
echo 'первая  производная = '.$proisvod.'<br>';
