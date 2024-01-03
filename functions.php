<?php
function myCalculator($AED, $oper, $EU) {
$sum;
 switch ($oper) {
     case "add":
         $sum = $AED + $EU;
         break;
     case  "sub":
         $sum = $AED - $EU;
         break;
     default:
         $sum = "There was an error!";
         break;
 }
 return $sum;
}

$AED = $_GET["AED"];
$oper = $_GET["oper"];
$EU = $_GET["EU"];

echo "Result: " . myCalculator($AED, $oper, $EU);