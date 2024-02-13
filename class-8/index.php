<!DOCTYPE html>
<html>
<body>

<?php  
    for($i=1; $i<=30; $i++){
       
        // echo $i;
        // echo ('<br>');
        // if($i == 6){
        //     break;
        // }
            // if($i % 13 == 0){
            //     echo $i;
            //     break;
            // }
  
        // if($i<20){
        //     continue;
        // }
        // echo $i;
        // echo ('<br>');  

    }

    $veryOld = 0;
    $old = 1;
    $new = 1;
    for($i = 0; $i<10; $i++){
        echo $veryOld;
        echo ('<br>');
        $old = $new;
        $new = $old + $veryOld;
        $veryOld = $old;
    }

?>  

</body>
</html>
