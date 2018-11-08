<?php
$totalSum= 0;
function addCalc($nr1,$nr2){
    global $totalSum;
    $totalSum+= $nr1+$nr2;
    return $totalSum."<br>";
}
 echo addCalc(2,10);
echo addCalc(63,55);
echo addCalc(123,0);