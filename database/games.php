<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pushpull</title>
</head>
<body>
    <main>
    <?php
    // Makes you able to insert into database
    require 'connection.php';

    if(isset($_POST["submit"])){
            echo " Begin van submit    descrItem: ";
            echo $_POST["descriptionItem"] . "  ";
          $name = filter_input(INPUT_POST, "nameItem", FILTER_SANITIZE_STRING);
          $descriptionItem = filter_input(INPUT_POST, "descriptionItem", FILTER_SANITIZE_STRING);
          $price = filter_input(INPUT_POST, "worth", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
          $query = $conn->prepare ("INSERT INTO push VALUES(:nameItem,:descriptionItem,:worth)");
            echo " AFTER FILTER: ".$descriptionItem."!!!";
          $query->bindValue("nameItem",$name);
          $query->bindValue("descriptionItem",$descriptionItem);
          $query->bindValue("worth",$price);
          $query->execute();

      };
    ?>
        <section class='form'>
            <form method="POST" name="pushform" action=#>
                <label for="nameItem" >Name item </label> <br>
                <input type="text" name="nameItem"> <br>
                <label for="descriptionItem"> Description </label><br>
                <input type="text" name="descriptionItem"> <br>
                <label for="price"> Price </label> <br>
                <input type="number" name="worth"> <br> <br>
                <input type="submit" value="submit" name="submit">
            </form>
        </section>
        <section class='container'>
        <?php 
    // Shows the items from the data base
    require 'connection.php';

    $query = $conn->prepare("SELECT * FROM push");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as &$data){
        echo "<section class='gamesBut'>
            <section class='img'>
                <img src='' alt='gamesImg'>
            </section>
            <section class='gamesInfo'>
                <section class='BigTitle'> <h2 class='TitleG'>" $gameName "</h2></section>
                <section class='titleGenre'><h3>Genre:</h3><p>" $gameGenre "</p></section>
                <section class='titleAge'><h3>Age:</h3><p>" $gameAge "</p></section>
                <section class='titleDescription'><h3> Description: </h3><p>" $gameText "</p></section>
                <section class='titlePrice'> <p class='price'>" $gamePrice "</p></section>
            </section>";
    };
    ?>
     </section>
    </main>
</body>
</html>
</body>
</html>