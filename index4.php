<?php
header('Content-Type: text/html; charset=utf-8');
$array = array(10, 10, 3, 4, 12, 12, 12, 9, 4, 5, 6, 7, 7, 1);
$count = count($array);
$cnt_match = 0;
for($i=0; $i<$count-1; $i++){
	if($array[$i] == $array[$i+1]){
		$cnt_match++;
	}
}
echo "Количество пар одинаковых элементов: $cnt_match";
?>