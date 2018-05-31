$findNumber = 123469;
$result;
$a = 10;
$b = 1;
$arrNumber = array();
$num = $findNumber;
while ($num > 0) {
    
    $digit = $num % $a / $b;
    $num = $num - ($num % $a);
    array_push($arrNumber, $digit);
    $a *= 10;
    $b *= 10;
        
}

for($i = 0; $i < count($arrNumber); $i++){

    if(($arrNumber[$i] < $arrNumber[$i + 1])) {

        $result = "не образуют";
        break;
    } $result = "образуют";

}

echo 'цифры натурального числа '.$findNumber.' возрастающую последовательность '.$result;
