<!DOCTYPE html>
<html>
<body>

<?php

if (5 > 3) {
  echo "Have a good day!";
}

echo('<br>');
echo('<br>');
$t = 12;

if($t<20){
    echo 'have a good day';
}

echo('<br>');
echo('<br>');

$a = 20;
$b = 30;
$c = 40;

if($a<$b && $b<$c){
    echo 'both condition are true';
}
echo('<br>');
echo('<br>');

if($a > 50){
    echo 'match the first condition';
}
elseif($b>$a){
    echo 'match the second condition';
}else{
    echo 'NAN';
}

echo('<br>');
echo('<br>');

$x = 4 ;
if($x < 5) $y = 'Hello world';
echo $y;
echo('<br>');
echo('<br>');

$p = $x > 10 ? 'woo' : 'good bye';
echo $p;

?>
 
</body>
</html>
