<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="./../CSS/style.css">
  </head>
  <body>
    <?php
    if (isset($_SESSION['error'])) {
      echo '<span class="red">', $_SESSION['error'], '</span>';
      unset($_SESSION['error']);
    }
     ?>
    <h4>Rejestracja</h4>
    <form action="regi.php" method="post">
      <input type="text" name="imie" placeholder="Imie"><br><br>
      <input type="text" name="nazwisko" placeholder="Nazwisko"><br><br>
      <input type="text" name="login" placeholder="Login"><br><br>
      <input type="password" name="pass" placeholder="Hasło"><br><br>
      <input type="submit" name="przycisk" value="Zarejestruj się"><br><br>
    </form>
  </body>
</html>
