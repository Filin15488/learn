<?php
require_once("./class/class.point.php");

$arr = [
        point::get_point(1,1),
        point::get_point(1,2),
        point::get_point(3,0),
        point::get_point(4,5)
];

// echo "<pre>";
// var_dump($arr);

// определяем минимальное и максимальное
$x_min = $x_max = $arr[0]->get_x();
$y_min = $y_max = $arr[0]->get_y();

for ($i=0; $i<count($arr); $i++)
{
    if ($x_min > $arr[$i]->get_x()) $x_min = $arr[$i]->get_x();
    if ($x_max < $arr[$i]->get_x()) $x_max = $arr[$i]->get_x();
    if ($y_min > $arr[$i]->get_y()) $y_min = $arr[$i]->get_y();
    if ($y_max < $arr[$i]->get_y()) $y_max = $arr[$i]->get_y();
}

// размеры выводимого изображения
$height = 400;
$width = 400;

// создаём полноцветное изображение
$img = imagecreatetruecolor($width,$height);
if (!$img) exit ("Ошибка создания изображения");
// определяем чёрный цвет
$black = imagecolorallocate($img,0,0,0);
// определяем белый цвет
$white = imagecolorallocate($img,255,255,255);
// Заливаем белым цветом фон
imagefill($img,0,0,$white);
// рисуем ломанную
for ($i=0;$i<count($arr)-1; $i++)
{
    $x1 = ($arr[$i]->get_x() - $x_min) * $width/($x_max-$x_min);
    $y1 = ($y_max - $arr[$i]->get_y()) * $height/($y_max-$y_min);
    $x2 = ($arr[$i+1]->get_x() - $x_min) * $width/($x_max-$x_min);
    $y2 = ($y_max - $arr[$i+1]->get_y()) * $height/($y_max-$y_min);
    imageline($img,$x1,$y1,$x2,$y2,$black);
}

// Выводим изображение
header("Content-Type: " . image_type_to_mime_type(IMAGETYPE_PNG));
imagepng($img);