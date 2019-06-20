<?php
  session_start();
  if (!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['login']) && !empty($_POST['haslo']))
   {
     require_once('./connect.php');
     if($connect)
    {
      $login =$connect->real_escape_string(htmlentities($_POST['login']));
      $pass =$connect->real_escape_string(htmlentities($_POST['haslo']));
      $imie =$connect->real_escape_string(htmlentities($_POST['imie']));
      $nazwisko =$connect->real_escape_string(htmlentities($_POST['nazwisko']));
      $sql="SELECT * FROM `users` WHERE Login='$login'";
      $sql_insert="INSERT INTO `users`(`Login`, `Haslo`, `Imie`, `Nazwisko`) VALUES ('$login','$pass','$imie','$nazwisko')";
      if ($result = $connect->query($sql))
      {
        if ($result->num_rows==1)
         {
          $connect->close();
          $_SESSION['error']='Uzytkownik o danym tym loginie już istnieje';
          header('location: ./regiwrite.php');
        }else
          if ($connect->query($sql_insert)) {
            header('location: ./index.php');
          }else {
            $_SESSION['error']='Error'.$sql_insert;
            header('location: ./regiwrite.php');
          }
        }
      }
    }else {
    header('location: ./regiwrite.php');
    $_SESSION['error'] = 'Wypelnij wszystkie pola';
   }
 ?>
