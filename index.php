<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>System logowania projekt</title>
    <link rel="stylesheet" href="./css/wooden_wonders.css">
  </head>
  <body>
    <div id="log">

    <h4>Logowanie</h4>
      <form action="check.php" method="post">
        <input type="text" name="login" placeholder="login"><br><br>
        <input type="password" name="pass" placeholder="Hasło"><br><br>
        <input type="submit" name="przycisk" value="Zaloguj się"><br><br>
      </form>
      <!-- ten php wyrzuca u mnie na mozilli błędy
        cos takiego:
        ', $_SESSION['error'], ''; unset($_SESSION['error']); } ?>
        wyrzuca to pod formularze logowania nie wiem czemu

    -->
      <?php
       if (isset($_SESSION['error'])) {
         echo '<span class="red">', $_SESSION['error'], '</span>';
         unset($_SESSION['error']);
       }
        ?>

    </div>
  </body>
</html>
