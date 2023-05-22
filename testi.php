<?php
$x = [
    11,
    "hey",
    false,
    $nestedArray = array(
        "hey2",
        5.5
    )
];

var_dump($nestedArray[1]);
//-------------------------------------------------------

$x = 15;
$y = 13;

// aritmetikuli
$shekreba = $x + $y;
$gamokleba = $x - $y;
$gamravleba = $x * $y;
$gayofa = $x / $y;
$nashti= $x % $y;
$xarisxi = $x ** $y;

echo $shekreba. "<br>";
echo $gamokleba. "<br>";
echo $gamravleba. "<br>";
echo $gayofa. "<br>";
echo $xarisxi. "<br>";
echo $nashti. "<br>";

// minicheba
echo ($x = $y). "<br>";
echo ($x .= $y). "<br>";
echo ($y -= $x). "<br>";
echo ($x *= $y). "<br>";
echo ($y /= $x). "<br>";
echo ($y %= $x). "<br>";


// shedareba
echo ($x == $y). "<br>";
echo ($x != $y). "<br>";
echo ($x > $y). "<br>";
echo ($x < $y). "<br>";
echo ($x >= $y). "<br>";
echo ($x <= $y). "<br>";







