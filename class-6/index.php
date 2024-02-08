<!DOCTYPE html>
<html>
<body>

<?php  
$fname='Hossain';
$lname = 'ali';
$middlename = 'woo';

printf('my name is %2$s %3$s %1$s', $fname,$lname,$middlename);

echo('<br>');

printf('the binary equivalent of %1$d is %1$b',10);

echo('<br>');
$n = 42.257;
printf('%.2f',$n); // after the . print the two degite number and f meanis the floating number
echo('<br>');

$n = 12;
$m = 45;
$n = 32.456;
$m = 21.125;

// printf('%04d',$n);
// echo('<br>');
// printf('%04d',$m);
// echo('<br>');

printf('%08.2f',$n);
echo('<br>');
printf('%07.1f',$m);

// sprintf ...

$fullName = sprintf('His name is %1$s %2$s' , $fname, $lname);
echo('<br>');
echo $fullName;

?>  

</body>
</html>
