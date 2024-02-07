<!DOCTYPE html>
<html>
<body>

<?php

$result = 'ffs';
$result = 2.4;
// var_dump($result);

$firstName = 'jhon';
$lastNmae = 'abraham';

printf('my name is %s %s ',strtoupper($firstName) ,$lastNmae);
echo('<br>');
echo ('his name is' . $lastNmae);
echo('<br>');
echo ("his name is {$firstName}");
echo('<br>');
$n = 8 ;
// echo $n ;
$m = ++$n;
echo $m , $n;

?>
 
</body>
</html>
