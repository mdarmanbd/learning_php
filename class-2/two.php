<?php

$value = 'pi value is';
$pi = pi();

echo( $value . ':' . " " . $pi );
echo('<br>');
echo('<br>');
echo('<br>');
echo ('min value is : ' . min(150,20,89));
echo('<br>');
echo('<br>');
echo('<br>');
echo ('max value is : '  . max(150,20,89));
echo('<br>');
echo('<br>');
echo('<br>');

define ('firstName' , 'Mohammod');
define ('LastName' , 'Arman');
echo (firstName . ' ' . LastName);
echo('<br>');
echo('<br>');
echo('<br>');

const MYCARE = 'Volvo';
echo (MYCARE);
echo('<br>');
echo('<br>');
echo('<br>');

define ('cars' , ['BMW', 'Toyto','Sonata']);
echo cars[2];
echo('<br>');
echo('<br>');
echo('<br>');

function myCare(){
    return cars[1];
}
echo( myCare() );

?>