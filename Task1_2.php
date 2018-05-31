//Task1_2  Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

$findNumber = 5;

for($i = 1000; $i < 9999; $i++){
    $num = $i;
    $a = 10;
    $b = 1;
    $sum = 0;


    for($k = 0; $k < 4; $k++){

        $digit = $num % $a / $b;
        $num = $num - ($num % $a);
       
        $a *= 10;
        $b *= 10;

        $sum += $digit;

    }

    if ($sum == $findNumber){
        echo $i.'</br>';
    }

}
