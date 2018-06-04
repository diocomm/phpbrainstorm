/*Task2_6 В  массиве  А(N)  максимальные  элементы,  являющиеся  четными  числами, заменить значениями их индексов.  
*/
 $arr = array(88, 1, 139, 4, 3, 88, 7, 8, 88, 6, 123);
 $max = $arr[0];


for($k = 0; $k < count($arr); $k++) {
  
    if ($arr[$k] > $max && $arr[$k] % 2 == 0 ) {

    	$max = $arr[$k];

    }
}

for($i = 0; $i < count($arr); $i++) {
  
    if ($arr[$i] == $max) {

    	$arr[$i] = $i;

    }
}

for($f = 0; $f < count($arr); $f ++) {

echo 'index = '.$f.' value = '.$arr[$f].'<br>';

}
