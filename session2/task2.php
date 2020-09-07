<?php

// ************************/
// *********5*************/

$arr = array("Sara" => "31", "John" => "41", "Walaa" => "39", "Ramy" => "40");

echo 'array: <br>';
foreach ($arr as $x => $val) {
    echo "$x => $val<br>";
}

echo '<hr>';
asort($arr);
echo 'array sorted ascending according to value: <br>';
foreach ($arr as $x => $val) {
    echo "$x => $val<br>";
}

echo '<hr>';
ksort($arr);
echo 'array sorted ascending according to Key: <br>';
foreach ($arr as $x => $val) {
    echo "$x => $val<br>";
}

echo '<hr>';
arsort($arr);
echo 'array sorted descending according to Value: <br>';
foreach ($arr as $x => $val) {
    echo "$x => $val<br>";
}

echo '<hr>';
krsort($arr);
echo 'array sorted descending according to Key: <br>';
foreach ($arr as $x => $val) {
    echo "$x => $val<br>";
}
