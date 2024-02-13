<!DOCTYPE html>
<html>
<body>

<?php  
    $n = 4;

    $result = ($n % 2 == 0) ? 'A' : 'B';
    $result = ($n % 2 == 0) ? 'X' : (($n == 9) ? "nine" : 'ten');
    $result = ($n / 2 == 4 ) ? 'result is four' : (($n / 2 == 2) ? 'result is 2' : 'unknown');
    echo($result);
    echo('<br>');
    for($i = 0 ; $i <=10 ; $i++){
        // echo $i;
        echo('<br>');
        for($j = 0 ; $j < $i ; $j++){
            echo '  *';
           
        }

    }
//  echo('<br>');

//     $i = 0;
//     while($i < 10){
//         $i ++;
//         echo($i);
//         echo ('<br>');
//     }

//     echo('<br>');
//     $k = 0;
//     do{
//         $k++;
//         echo $k;
//         echo ('<br>');
//     }while($k < 10);

     echo ('<br>');
     echo ('<br>');
     echo ('<br>');

    for($i = 10 , $j = 0; $i > 0 ; $i-=1, $j++){
        echo $i. ":" . $j  ;
        echo ('<br>');
       
    }

?>  

</body>
</html>
