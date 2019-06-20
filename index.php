<?php
session_start();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Najlepszy projekt</title>

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="stylesheet" href="css/core.css" />
  <link rel="stylesheet" href="css/wooden_wonders.css" />

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

</head>
<body>
<div class="external" id="top">

<div class="header">
  <!-- to wygląda na zbędne -->
  <h1 class="logo"><a href="./">Wooden Wonders<br /><br /><p class="subtitle">szablonystron.org</p></a></h1>
     <div class="home_spacer">
     <a href="./">
     <div class="home">
     </div>  </a>
     <div class="letter">
     </div>
     <div id="log">
     <h4>Logowanie</h4>
       <form action="check.php" method="post">
         <!-- <input type="text" name="login" placeholder="Login"><br><br>
         <input type="password" name="pass" placeholder="Hasło"><br><br> -->
         <input type="submit" name="przycisk" value="Zaloguj się"><br><br>
       </form>
     </div>
     <div id="reg">
        <form action="regiwrite.php" method="post">
          <input type="submit" name="przycisk" value="Rejestracja"><br><br>
        </form>
     </div>
</div>
<div class="decoration1"></div>
<div class="main">
  <div class="sidebar_spacer">
  <div class="section sidebar">

      <ul class="menu">
        <li class="first selected"><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">sit amet consectetur</a></li>
        <li><a href="#">adipiscing elit</a></li>
        <li><a href="#">Duis dictum varius</a></li>
        <li><a href="#">lobortis Nunc non</a></li>
        <li><a href="#">leo justo a dignissi</a>
        </li>
        <li><a href="#">mnisi Phasellus in</a></li>

      </ul>
      <div id="kontakt">

        <form action="" method="post" enctype="text/plain">  <br />
<div class="kontakt">Kontakt</div><br />
<div class="email"><input name="email" class="field" id="email" value="adres e-mail"/><br /><br /></div>
<div class="temat"><input name="temat" class="field" id="temat" value="temat"/><br /><br /></div>
<div class="tresc"><textarea name="tresc" cols="16" rows="50" class="field2" id="tresc"  >tresc</textarea><br /></div>
<div class="wyslij"><input type="submit" value="wyślij" name="submit" id="wyslij" /></div>
      </form>

      </div>
    <div class="clear"></div>
  </div>
  </div>
   <div class="content_spacer">
    <div class="section_content">
      <div class="menu_poziome">

      <ul class="menu">
        <li><a href="#">Start</a></li>
        <li><a href="#">Dolor sit amet</a></li>
        <li><a href="#">Consectetur</a></li>
        <li><a href="#">Duis dictum</a></li>
        <li><a href="#">Nunc non</a></li>

      </ul>

      </div>
      <div class="obrazek"></div>
      <div class="decoration2"></div>
      <div class="content">
      <div class="tekst">
      <h1>Nagłówek :) </h1>

<p>Strona na Projekt </p>

      </div>
      </div>
      <div class="footer">
      <p>Stopka  </p>
      </div>
    </div>

  </div>

  <div class="clear"></div>
</div>
</div>
</div>
<!-- ten php wyrzuca u mnie na mozilli błędy
  cos takiego:
  ', $_SESSION['error'], ''; unset($_SESSION['error']); } ?>
  wyrzuca to pod formularze logowania nie wiem czemu
  print "<span class="red">" . $_SESSION['error'] .  "</span>";
  unset($_SESSION['error']);
-->
<?php
 if (isset($_SESSION['error'])) {
   echo "<span class="red">", $_SESSION['error'], "</span>";
   session_unset();
 }
  ?>
</div>
</body>
</html>
