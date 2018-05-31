//Task1_6  Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.
for($i = 1000; $i < 9999; $i++){
    $num = $i;
    $a = 10;
    $b = 1;
    $arrNumber = array();

    for($k = 0; $k < 4; $k++){

        $digit = $num % $a / $b;
        $num = $num - ($num % $a);
       
        $a *= 10;
        $b *= 10;

        array_push($arrNumber, $digit);
         
    }
        if (($arrNumber[0] == 0 || $arrNumber[0] == 2 || $arrNumber[0] == 3 || $arrNumber[0] == 7) && 
            ($arrNumber[1] == 0 || $arrNumber[1] == 2 || $arrNumber[1] == 3 || $arrNumber[1] == 7) && 
            ($arrNumber[2] == 0 || $arrNumber[2] == 2 || $arrNumber[2] == 3 || $arrNumber[2] == 7) && 
            ($arrNumber[3] == 0 || $arrNumber[3] == 2 || $arrNumber[3] == 3 || $arrNumber[3] == 7) ) {

            echo $i.'<br>';
            
        }

}
