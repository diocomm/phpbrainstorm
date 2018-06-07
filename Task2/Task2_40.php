// //Task2_40 Получить   упорядоченный   по   возрастанию   массив   С(К)   путем  слияния двух упорядоченных по возрастанию массивов А(N)  и В(М), где  К=М+N.

$arr1 = array(1,  2,  3,  4, 20, 50, 57, 58, 59, 60);
$arr2 = array(10, 11, 41, 50, 65);
$arr3 = array();

$q = 0;
$i = 0;
$j = 0;

    while ($q != count($arr1) + count($arr2)){

        if ($i > count($arr1) - 1) {
            array_push($arr3, $arr2[$j]);
            $j++;
        } else if ($j > count($arr2) - 1) {
            array_push($arr3, $arr1[$i]);
            $i++;
        } else if ($arr1[$i] < $arr2[$j]) {
            $arr3[$q] = $arr1[$i];
            $i++;
        } else {        
            $arr3[$q] = $arr2[$j];
            $j++;
        }
        $q++;
    }
