
//Task1_12. Определить, является ли заданное целое число N простым

$num = 1734;
$result = 'простое';

        for($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $result = 'составное';     
                break ;
            } 
                     
        }
echo $num.' - '.$result;
