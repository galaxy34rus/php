<?php
$filename11 = "image/pr.png";
$filename22 = "result2png.png";
header('Content-Type: image/png');

list($width, $height) = getimagesize($filename11);// получаем размер изображения
$new_width = 200;
$new_height = 100;

$image_p = imagecreatetruecolor($new_width, $new_height);/* 
создаём пустую картинку методом imagecreatetruecolor иначе будем иметь 8-ми битный результат
*/
$image = imagecreatefrompng($filename11);//создаём картинку из пнг файла
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);// копируем наш пнг файл в пустую картинку

imagepng($image_p,$filename22, 9); //выводим картинку, 9 - качество сжатия
imagepng(imagecreatefrompng($filename22));

	
?>