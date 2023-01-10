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
  <?php
require 'connection.php';
echo 'start of code/';
if(isset($_POST["submit"])){
  echo 'oke/';
    $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_STRING);
    $secondname = filter_input(INPUT_POST, "secondname", FILTER_SANITIZE_STRING);
    $gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_STRING);
    $street = filter_input(INPUT_POST, "street", FILTER_SANITIZE_STRING);
    $hnum = filter_input(INPUT_POST, "hnum", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING);
    $languages = filter_input(INPUT_POST, "languages", FILTER_SANITIZE_STRING);
  echo 'yeah/';
    $query = $conn->prepare ("INSERT INTO fdata VALUES(:firstname,:secondname,:gender,:street,:hnum,:languages,:email,:pwd)");

    $query->bindValue("firstname",$firstname);
    $query->bindValue("secondname",$secondname);
    $query->bindValue("gender",$gender);
    $query->bindValue("street",$street);
    $query->bindValue("hnum",$hnum);
    $query->bindValue("email",$email);
    $query->bindValue("pwd",$pwd);
    $query->bindValue("languages",$languages);
    $query->execute();

  echo 'connected/';
};
echo 'end of code/';
?>
    <main>
      <form method="POST" name="dataform" action=#>
        <label for="firstname">Voornaam : </label> <br />
        <input type="text" id="firstname" name="firstname" autofocus autocomplete="on" pattern="[A-Za-z]{0,100}" required/> <br />
        <label for="secondname">Achternaam : </label> <br />
        <input type="text" id="secondname" name="secondname" required/> <br />

        <label> Geslacht </label> <br>
        <input type="radio" id="SexM" name="gender" value="man" required> Man
        <input type="radio" id="SexW" name="gender" value="woman" required> Woman <br />

        <label for="street">Straat en huisnummer : </label> <br />
        <input type="text" id="street" name="street" required/>
        <input type="number" id="hnum" name="hnum" required> <br/>

        <label for="country">Selecteer een eindbestemming : </label>
        <select id="languages" name="languages">
          <option value="Spanje" name="spanje" >Spanje</option>
          <option value="Italie" name="italie" >Italie</option>
          <option value="Oekraine" name="oekraine" >Oekraine</option>
        </select>
        
        <br />
        <br />
        <label for="email" > E-Mail : </label> <br />
        <input type="email" id="email" name="email" required/> <br />

        <label for="password">Wachtwoord : </label> <br />
        <input type="password" id="pwd" name="pwd" required/> <br />

        <input type="submit" value="submit" name="submit" /><br />
      </form>
      
    </main>
    <footer></footer>
  </body>
</html>