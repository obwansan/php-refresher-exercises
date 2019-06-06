<?php

$myNum = 10;

// Pass by value ($myNum isn't changed)
function addFive($num) {
  $num += 5;
};

// Pass by reference ($myNum is changed)
function addTen(&$num) {
  $num += 10;
};

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";

?>
