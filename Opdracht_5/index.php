<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $fname = $_POST["Firstname"];
    $sname = $_POST["Secondname"];
    $gender = $_POST["gender"];
    $street = $_POST["street"];
    $hNum = $_POST["hNum"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $languages = $_POST["languages"];
    $language = "";
    foreach($language as $row){
        $language .-$row. ",";
    };

    $query = "INSERT INTO tb_data VALUES('','$fname','$sname','$gender','$street','$hNum','$language','$email','$pwd')";
    mysqli_query($conn, $query);

    echo " <script> console.log('yeah'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <main>
      <form>
        <label for="fName">Voornaam : </label> <br />
        <input type="text" id="fName" name="fName" autofocus autocomplete="on" pattern="[A-Za-z]{0,100}"/> <br />
        <label for="sName">Achternaam : </label> <br />
        <input type="text" id="sName" name="sName" /> <br />

        <label> Geslacht </label> <br>
        <input type="radio" id="SexM" name="m" value="man" > Man
        <input type="radio" id="SexW" name="f" value="woman"> Woman <br />

        <label for="street">Straat en huisnummer : </label> <br />
        <input type="text" id="street" name="street"/>
        <input type="number" id="hNum" name="hNum"> <br/>

        <label for="Land">Selecteer een eindbestemming : </label>
        <select id="Spanje" id="italie" id="Oekraine">
          <option value="Spanje" name="spanje" >Spanje</option>
          <option value="Italie" name="italie" >Italie</option>
          <option value="Oekraine" name="oekraine" >Oekraine</option>
        </select>
        
        <br />
        <br />
        <label for="email"> E-Mail : </label> <br />
        <input type="email" id="email" name="email" /> <br />

        <label for="password">Wachtwoord : </label> <br />
        <input type="password" id="pwd" name="pwd" /> <br />

        <input type="submit" value="submit" />Submit<br />
      </form>
      
    </main>
    <footer></footer>
  </body>
</html>