<?php

// *********1*************/
echo nl2br("Mohamed.\nAbdelhady elshamy.");
echo '<hr>';


// ************************/
// *********2*************/

echo str_repeat("HADY <br>", 3);
echo '<hr>';


echo strrev("123");
echo '<hr>';

echo substr("12346789", 6);
echo '<hr>';


// *********3*************/
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
echo '<hr>';

// ************************/
// *********4*************/

$array1 = [12, 45, 10, 25];
$arrLength = count($array1);
$sum = 0;

for ($i = 0; $i < $arrLength; $i++) {

    $sum += $array1[$i];
}
$avg = $sum / $arrLength;

echo "the sum : $sum <br>";
echo "the average : $avg <br>";

sort($array1);

for ($x = 0; $x < $arrLength; $x++) {
    echo $array1[$x];
    echo "<br>";
}
echo '<hr>';
