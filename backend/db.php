<?php
  $db_host = '127.0.0.1';
  $db_port = '8889';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'site_padel';

    global $mysqli;
 
    $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
  );

	
  if ($mysqli->connect_error) {
    log('Errno: '.$mysqli->connect_errno);
    log(' ');
    log('Error: '.$mysqli->connect_error);
    exit();
  }

  echo '<script>';
  echo 'console.log("Success: A proper connection to MySQL was made. Host information: ' . $mysqli->host_info . ' Protocol version: ' . $mysqli->protocol_version . '")';
  echo '</script>';
  

 ?>
