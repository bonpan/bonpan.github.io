<?php
 if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['phone']) and !empty($_POST['message'])) {

   $headers = 'From: Timbur Igor\r\n'.
              'Reply-To: timburigor@gmail.com\r\n'.

   $theme = 'Mesaj nou';

  $letter = 'Continutul mesajului:\r\n';
  $letter .= 'Nume: '.$_POST['name'].'\r\n';
  $letter .= 'Email: '.$_POST['email'].'\r\n';
  $letter .= 'Telefon: '.$_POST['phone'].'\r\n';
  $letter .= 'Mesaj: '.$_POST['message'].'\r\n';

  if (mail('timburigor@gmail.com', $theme, $letter, $headers)){
  header('Location:/Multumesc.php');
  } else {
  header('Location:/');
  }
 }
 else {
  header('Location:/');
 }
 ?>
