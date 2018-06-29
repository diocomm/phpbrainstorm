<?php
header('Content-Type: text/html; charset=utf-8');

class Permutation {

    private $width;
    private $tempArray;
    private $mainArray;
    private $countReal;

    public function __construct($arr, $k) { 
          $arr = str_replace(' ', '', $arr);
          try {
              if($arr == ''){
                  throw new ArrayError('Строка не может быть пустой');
              } else {
                  $arr = str_split($arr);
              }

              if($k > count($arr)){
                  throw new WidthError('Ширина выборки не может быть больше длинны строки');
              } else if ($k < 1) {
                  throw new WidthError('Ширина выборки не может быть меньше 1');

              } else {
                  $tempArray = range(0, count($arr) - 1); 
                  $this->mainArray = $arr;        //основной массив
                  $this->tempArray = $tempArray; //массив индексов
                  $this->width = $k;     //ширина выборки                 
              }
                  
          } catch (WidthError $e) {
                $e->errorMsg();
                $e->errorWrt();

          } catch (ArrayError $e) {
          	  	$e->errorWrt();
                $e->errorMsg();
                 
          }       
    }

    function generateRearrange() { // метод перестановки, формируем массивы.
        
      if($this->width != 1){ 
            $j = 0;
            $t = 0;
            $arrTmp = $this->tempArray;

            $x = count($arrTmp) - $this->width;

            do {   // находим варианты сочетания индексов типа 123,124,125,134 и т.д.
                for($i = 0; $i < count($arrTmp) - $x; $i++) {
                  $arrComb[$t][] = $arrTmp[$i]; 
                }
                $t++;
            } while ($arrTmp = self::combination($arrTmp));

            for($k = 0; $k < count($arrComb);$k++) {
                $arrRear = $arrComb[$k];
                
                do {   //  записываем массив индексов для каждого варианта сочетания методом перестановки
                    for($i = 0; $i < count($arrRear); $i++) {
                        $arrIndex[$j][] = $arrRear[$i]; 
                    }
                $j++;
                $this->countReal++;//увеличиваем счетчик перестановки
                        
                } while ($arrRear = self::rearrange($arrRear));
            }

            for($i = 0; $i < count($arrIndex); $i++) { // записываем в финальный массив числа согласно индексам
                  for($l = 0; $l < count($arrIndex[$i]); $l++) {
                      $arrFinal[$i][$l] = $this->mainArray[$arrIndex[$i][$l]];
                  } 
            } 
                   
      } else { //если ширина 1

          for($l = 0; $l < count($this->mainArray); $l++) {
              $arrFinal[$l][0] = $this->mainArray[$l];
              $this->countReal++;
          }

      }//end if

      return $arrFinal;
    }

    function combination($arr){ //алгоритм сочетания различных вариантов 123, 124, 125, 134...

        $k = $this->width;
        $len = count($arr) - 1;

        for ($i = $k - 1; $i >= 0; $i--) { 

            if ($arr[$i] < $len - $k + $i + 1) {
                $arr[$i]++ ;

                for ($j = $i + 1; $j < $k; $j++) {
                   $arr[$j] = $arr[$j - 1] + 1;
                }     
               return $arr;
            }       
        }
        return false;
    }
      
    function rearrange($arr) { // алгоритм перестановки без повторени

        $len = count($arr) - 1;

        for ($i = $len - 1; $arr[$i] >= $arr[$i + 1]; $i--) { 
        }  
            if ($i < 0) { 
              return false; 
            }

        for ($j = $len; $arr[$j] <= $arr[$i]; --$j) { 
        }

        $arr = self::change($arr, $i, $j);
        $i++;

        for ($j = $len; $i <= $j; ++$i, --$j) {
            $arr = self::change($arr, $i, $j);
        }
     
        return $arr;
    }

    function change($arr, $indA, $indB) { //меняет местами 2 эл-та.

        $x = $arr[$indA]; 
        $arr[$indA] = $arr[$indB]; 
        $arr[$indB] = $x;

        return $arr;
    }

    function countFact(){ // количество размещений факт
       return $this->countReal; 
    }

    function countComb() { // количество размещений по формуле
        return self::factorial(count($this->mainArray))/
        self::factorial(count($this->mainArray) - $this->width);
    }

    function factorial($num) { //факториал
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++){
            $factorial *= $i; 
        }
        return $factorial;
    }

                      
}//end class

class WidthError extends Exception { //обработка ошибок
    private $msg;

    public function __construct($msg) {
       $this->msg = $msg;
    }

    function errorMsg(){ 
        echo 'Ошибка: '.$this->msg.'<br>';
    }

	function errorWrt() {
      $msg = $this->msg;
      $date = date('Y-m-d H:i:s (T)');
      $f = fopen('errors.log', 'a');

      if (!empty($f)) {			
          $errors  = "$date : $msg \r\n";
          fwrite($f, $errors);
          fclose($f);
      }
	}
}

class ArrayError extends WidthError {
}


////// тест

    $strX = "1234";

    $perm1 = new Permutation($strX,2);

    $arr = $perm1->generateRearrange();

    echo 'Рассчетное количество перестановок = '.$perm1->countFact().'<br>';
    echo 'Фактическое количество перестановок = '.$perm1->countComb().'<br>';

        


        for($i = 0; $i < count($arr); $i++) {
            for($l = 0; $l < count($arr[$i]); $l++) {

              echo $arr[$i][$l].' ';
            }
            echo '<br>';  
        }
