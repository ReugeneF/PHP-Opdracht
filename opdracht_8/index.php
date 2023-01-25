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
    $number;
    
     if(isset($_POST["submit"])){
        bindValue("num",$number);
        execute();
     };
     
     for($i = $number; $i <= 10; $i++){
        echo "$i x number = " . ($i * $number) . "<br>";
    }
    

    
    ?>


</body>
</html>