<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post' action=''>
        <label> Exclusief btw</label>
        <input id='number' type="number" name="number">  <br>
        <input type="radio" name="procent" value='laag'> Laag, 9% <br>
        <input type="radio" name="procent" value='hoog'> Hoog, 21% <br> <br>
        <input type="submit" name="verzend">
    </form>
    <?php
if(isset($_POST['verzend'])){
    $price= ($_POST['number']);
    $procent = ($_POST['procent']);

    echo "<p>Bedrag inclusief" . $procent . "BTW: " . $price*$procent . "</p>"
}
    ?>
</body>
</html>