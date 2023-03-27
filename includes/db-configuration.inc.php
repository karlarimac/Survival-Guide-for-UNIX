<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $user = "ft5320";
  $password = "Mycobacteriacaea8-evensong"; 
  $db = "ft5320"; 
  $host = "localhost"; 
  $port = 3307; 

  function retrieveDatabaseConnection() {
    global $user, $password, $db, $host, $port;
    $mysqli = new mysqli($host, $user, $password, $db, $port);
    if(!$mysqli) {
      $errorMessage = "ERROR {$mysqli->connect_error}";
      exit($errorMessage);
    }
    return $mysqli;
  }

?>