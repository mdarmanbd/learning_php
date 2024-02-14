<!DOCTYPE html>
<html>
<body>

<?php  


    
    // function isEven($number){
    //     if($number%2 == 0){
    //         return true;
    //     }
    //     return false;
    // }

    // $number = 12;

    // if(isEven($number)){
    //     echo "{$number} is even number";
    // }else{
    //     echo "{$number} is odd number";
    // }

    $persons = ['arman','ali','hassan'];

    // for($i = 0; $i < count($persons); $i++){
    //     echo $persons[$i];
    //     echo ('<br>');
    // }

    foreach($persons as $person){
        echo $person;
         echo ('<br>');
    }


?>  

</body>
</html>
