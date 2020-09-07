<?php

echo 'display_errors = ' . ini_get('display_errors') . "<br>";

if (ini_get('display_errors') == 1) {
    echo ("It is all good...<br>");
}

echo '<hr>';

define("WEBNAME", 'HADY');


echo WEBNAME . "<br>";
echo '<hr>';
echo 'Server name: ' . $_SERVER['SERVER_NAME'];
echo '<hr>';
echo 'Server address: ' . $_SERVER['SERVER_ADDR'];
echo '<hr>';
echo 'Server port: ' . $_SERVER['SERVER_PORT'];
echo '<hr>';
echo 'File path: ' . $_SERVER['SCRIPT_FILENAME'];
echo '<hr>';
echo 'File name: ' . basename($_SERVER['SCRIPT_FILENAME']);
echo '<hr>';
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
for ($i = 0; $i < 10; $i++) {
    echo $i + 1;
}

// ******************/
echo '<hr>';
$a = 0;
while ($a <= 10) {
    echo ($a + 1) * 2;
    $a++;
}
echo '<hr>';

$arr = array(1, 2, 3, 4, 5);

foreach ($arr as $value) {
    echo "Value is $value <br />";
}
