@include('inc.config')
<?php 

  unset($_SESSION["auth_charrmello"]);
  unset($_SESSION["token_charrmello"]);
  unset($_SESSION["userId_charrmello"]);

  echo 'You have logged out!';
  header( "refresh:0;url=/login" );
  
?>