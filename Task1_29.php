//Task1_29 Для  каждого  числа  заданной  последовательности  натуральных   чисел   n0 ,n1,...,nm установить,  можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась заданному числу к.  


$arr = array();
$findNumber = 4;
$limit1 = 1;
$limit2 = 1000;

for($j = $limit1; $j < $limit2; $j++) {
 
    $num = $j;
    $arr = array();

    while ($num != 0) {
        $dig =  $num % 10;
        $num = floor($num / 10);
        array_push($arr, $dig);
    } 

    $sum = 0;
    for ($i = 0; $i < count($arr); $i++){

        $sum += $arr[$i];

    }

    for ($f = 0; $f < count($arr); $f++){
        if($sum - $arr[$f] == $findNumber && $arr[$f] != 0){
            echo 'Из записи числа '.$j.'- можно вычеркнуть '.$arr[$f].' что бы получилось = '.$findNumber.'<br>';          
        }

    }

}
