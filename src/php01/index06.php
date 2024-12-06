<?php
function text ($a, $b)
{
    $value = $a + $b;
    return $value;
}

$total = text(2, 3);
echo $total ."<br />";


function exam ($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210){
        echo $total . "点なので合格です";
    } else {
        echo $total . "点なので不合格です";
    }
}

echo (exam(80, 60, 90)) . "<br />";


// function length ($bottom, $height, $top)
// {
//     $tri =(($bottom * $height) / 2) ;
//     $hex = $top * $height;
//     $dai =($top + $bottom) * $height / 2;
// }
// $square = length(10, 10, 5);
// echo "三角形の面積は" . $tri . "です" . "<br />";
// echo "四角形の面積は" . $hex . "です" . "<br />";
// echo "台形の面積は" . $dai . "です" . "<br />";

function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoidArea($upperbase, $lowerbase, $height)
{
    return ($upperbase + $lowerbase) * $height / 2;
}
echo "四角形の面積は" . getSquareArea(5, 5) . "です" . "<br />";
echo "三角形の面積は" . getTriangleArea(7, 8) . "です" . "<br />";
echo "台形の面積は" . getTrapezoidArea(4, 5, 4) . "です" . "<br />";