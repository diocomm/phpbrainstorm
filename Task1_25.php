//Task1_25 Среди      заданной      последовательности      натуральных      чисел    n0 ,n1,...,nm найти  сумму  и  количество  тех  чисел,  которые  равны  сумме  факториалов своих цифр. 

$arr = array();
$findNumber = 40585;
$limit1 = 1;
$limit2 = 50000;
$sumFact = 0;

for($j = $limit1; $j < $limit2; $j++) {
    $findNumber = $j;
    $num = $j;
    $arr = array();
    while ($num != 0) {

        $dig =  $num % 10;
        $num = floor($num / 10);
        array_push($arr, $dig);
    } 


    $sum = 0;

    for ($i = 0; $i < count($arr); $i++){
        $factorial = 1;
        
        for($k = 1; $k <=  $arr[$i]; $k++){
            $factorial *= $k;
        
        }

        $sum += $factorial;
    }
   
    if($sum == $findNumber){

    	$sumFact += $findNumber;
    	echo $findNumber.'<br>';

    }

}
echo 'Сумма '.$sumFact;
