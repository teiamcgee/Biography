<!-- Database connection -->
<?php
try {
  // make a new connection to the database
$db = new PDO('mysql:dbname=Portfolio;host=localhost', 'root', 'root');
// check for errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
  // if there is a error send the message
    echo $e->getMessage();
    exit;
  }
?>
