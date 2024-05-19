<?php
$intVar = 42;
$floatVar = (float) $intVar;
echo "$floatVar\n";

$floatVar = 3.14;
$intVar = (int) $floatVar;
echo "$intVar\n";

$k = (double)$floatVar;
echo "$k\n";
//echo "(double)$floatVar";  can't do this php is not that advanced

$stringVar = "123";
$intVar = (int) $stringVar;
echo "$intVar\n";

$boolVar = (bool) $intVar;
echo $boolVar;

$string = (string)$intVar;
echo "\nstring = $string";
?>