<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" name="pushform" action=#>
        <input type="number" name="num"> <br>
        <input type="submit" value="show table" name="submit">
    </form>
    
    <?php
     if(isset($_POST["submit"])){
        $number = filter_input(INPUT_POST, "num", FILTER_SANITIZE_NUMBER_INT);

        for($i = 1; $i <= 10; $i++){
            echo "$i x $number = " . ($i * $number) . "<br>";
        }
     };
    

    
    ?>


</body>
</html>