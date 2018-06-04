//Task1_24 Напечатать  натуральное  число  N :  а)  в  двоичной  системе  счисления;  б) в шестнадцатеричной системе счисления.  
///////////a) ////

$num = 2312;

$arr = array();
while ($num >= 1) {

  	$rem =  $num % 2;
  	$num = floor($num / 2);
  	array_push($arr, $rem);
 } 

for($i = 0; $i <= count($arr); $i++){
  	echo $arr[count($arr) - $i];
}
echo '<br>';
/////////b) //////
$num = 2312;

$arr = array();
while ($num >= 1) {

    $rem = $num % 16;
    $num = floor($num / 16);
    switch ($rem) {
        case '10': $rem = "A"; break;
        case '11': $rem = "B"; break;
        case '12': $rem = "C"; break;
        case '13': $rem = "D"; break;
        case '14': $rem = "E"; break;
        case '15': $rem = "F"; break;
    }
    array_push($arr, $rem);

 } 

for($k = 0; $k <= count($arr); $k++){
   echo $arr[count($arr) - $k];
}
