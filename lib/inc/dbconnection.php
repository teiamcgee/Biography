<?php
  try{
    // makes a new connection to the database

  $db = new PDO('mysql:host=localhost;dbname=Portfolio', 'root', 'root');
  // check for errors
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e){
    // Catches the error and sends the error message
      echo $e->getMessage();
      exit;
  }

?>
