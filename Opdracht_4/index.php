<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O4</title>
</head>
<body>
    <!-- Opdracht 1 -->
<?php
    date_default_timezone_set("Europe/Amsterdam");

    $time = date('G');
    $text;
    
    if(($time >= 6 )&&( $time <= 12)){
    echo "Het is ochtend";
    }

   elseif(($time >= 12 )&&( $time <= 18)){
    echo "Het is middag";
   }

   elseif(($time >= 18 )&&( $time <= 0)){
    echo "Het is avond";
   } 

   elseif(($time <= 0 )&&( $time <= 6)){
    echo "Het is nacht"; 
   } 

    ?>

    <br> <br>
    <!-- Opdracht 2 -->
    <?php
    // date_default_timezone_set("Europe/Amsterdam");
    // $timeG = ('G');

    // $wow = match($timeG){
    //     7,8,9,10,11,12 => "Ochtend", 
    //     13,14,15,16,17,18 => "middag",
    //     19,20,21,22,23,0 => "Avond",
    //     1,2,3,4,5,6 => "Nacht",
    // };

    // echo $wow;
    ?>
 <br> <br> 
    <!-- Opdracht 3 -->
 <?php
    $n1 = 15;
    $n2 = 10;

    if($n1 > $n2){
        $answer = ($n1 * 2) + $n2;
    } else{
        $answer = ("nope");
    };
        echo "uitkomts: " .$answer;
 ?>
 <br> <br>
    <!-- Opdracht 4 -->
 <?php
    $value = 150;
    $Nvalue;

    if( $value >= 150){
        $Nvalue = $value * 1.19;
    }elseif( $value >= 55){
        $Nvalue = $value * 1.11;
    }else{
        $Nvalue = $value * 1.16;
    };

    echo $Nvalue;

 ?>
    <php>
</body>
</html>