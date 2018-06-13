
//Task 3 19 В   массиве    А(N,N),    переставить     друг   с  другом    центрально-симметричные квадраты.  

$a = array(1,   2,    3,    4);
$b = array(5,   6,    7,    8);
$c = array(9,   10,   11,   12);
$d = array(13,  14,   15,   16);

$arr = array($a, $b, $c, $d);

$y = count($arr) / 2;

for($i = 0; $i < $y; $i++) {  

    for ($j = 0; $j < $y; $j++) {

        $x = $arr[$i + $y][$j + $y];
        $arr[$i + $y][$j + $y] = $arr[$i][$j];
        $arr[$i][$j] = $x;

        $z = $arr[$i][$j + $y];
        $arr[$i][$j + $y] = $arr[$i + $y][$j];
        $arr[$i + $y][$j] = $z;

    }	

}
