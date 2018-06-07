//Task2_31 Вычислить значение многочлена и всех его производных в заданной точке x (коэффициенты хранятся в массивах ).  

//вид многочлена = 2x^4 - x^3 - 3x^2 + 6
$n = 4;//максимальная степень многочлена
$x = 4;//значение x
$nPow = $n;//степень x
$nMaxPow = $n;//максимальная степень производной
$arr1 = array(2, -1, -3, 0, 6); ///массив для коэ. многочлена
$arr2 = array();//массив для коэ. производных
$count = 0;
$result = 0;//значение многочлена
$numProisvod;

	for ($i = 0; $i <= $n; $i++){	
	  	$result = $result * $x + $arr1[$i];		
	}
	echo 'Значение многочлена = '.$result.'<br>';

	  $proisvod = 0;
		for ($i = 0 ; $i < $n ; $i++){//первая производная
        $y = $arr1[$i] * ($nPow--);
        array_push($arr2, $y); 
        $proisvod = $proisvod * $x + $y;
		}
    
		echo ++$numProisvod.' - производная = '.$proisvod.'<br>';
		
		for ($j = 0 ; $j < $n  ; $j++){// количество производных 
        $proisvod = 0;
        $nPow = --$nMaxPow ;
        for ($i = $count; $i < $n - 1 + $d; $i++) { 			
            $y = $arr2[$i] * ($nPow--);
            
            if($nPow < 0) {
               break;
            }

            $proisvod = $proisvod * $x + $y;
            array_push($arr2, $y); 		
            $count++;				
			  }
			
        $d = $count++;
        echo ++$numProisvod.' - производная = '.$proisvod.'<br>';
		}
		
