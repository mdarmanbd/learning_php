
<?php
    if(isset($_POST['submitMe'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if($_POST['submitMe'] == 'Add'){
            $result = $number1 + $number2;
            echo $result;
        }

        if($_POST['submitMe'] == 'Sub'){
            $result = $number1 - $number2;
            echo $result;
        }

        if($_POST['submitMe'] == 'Mul'){
            $result = $number1 * $number2;
            echo $result;
        }

        if($_POST['submitMe'] == 'Div'){
            $result = $number1 / $number2;
            echo $result;
        }
       
    }   


?>





<!DOCTYPE html>
<html>
<body>

    <form action="index.php" method="POST">
        <div style ='padding:20px'>
            <label for="number1">Number 1</label>
            <input type="number" name="number1">
        </div>

        <div style ='padding:20px'>
            <label for="number2">Number 2</label>
            <input type="number" name="number2">
        </div>

        <div style ='padding:20px'>            
            <input type="submit" name="submitMe" value="Add">
            <input type="submit" name="submitMe" value="Sub">
            <input type="submit" name="submitMe" value="Mul">
            <input type="submit" name="submitMe" value="Div">
        </div>
    </form>

</body>
</html>
