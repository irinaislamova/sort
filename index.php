<?php
$arr = array(4, 8, 2, 8, 4, 9, 0, 10, 5, 3, 1, 2, 6, 4, 9, 43, 42);
print_r($arr);
$t = true;
while($t){
    $t = false;
    for($i = 0; $i < count($arr) - 1; $i++){
        if ($arr[$i] > $arr[$i + 1]){
            $temp = $arr[$i + 1];//перестановка местами
            $arr[$i + 1] = $arr[$i];
            $arr[$i] = $temp;
            $t = true;//продолжаем цикл
        }
    }
}
echo '<br>';
foreach ($arr as $key => $value) {
	echo $value . " | ";
}
?>
