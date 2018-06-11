//Task1_29 Для  каждого  числа  заданной  последовательности  натуральных   чисел   n0 ,n1,...,nm установить,  можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась заданному числу к.  



$findNumber = 4;
$limit1 = 10;
$limit2 = 100;

for($j = $limit1; $j < $limit2; $j++) {
 
    $num1 = $j;
   	$sum = 0;

    while ($num1 != 0) {
        $dig =  $num1 % 10;
        $num1 = floor($num1 / 10);
        $sum += $dig;
     
    } 
    $num2 = $j;
   	while ($num2 != 0) {
        $dig2 =  $num2 % 10;
        $num2 = floor($num2 / 10);
        
        if(($sum - $dig2) == $findNumber && $dig2 != 0){
        
        	echo 'Из числа '.$j.' можно вычеркнуть '.$dig2.' что бы получилось '.$findNumber.'<br>';;
        }
     
    } 

echo $j.'<br>';
