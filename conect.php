<?php

$conn = new mysqli('localhost','root','','banca1');

if($conn->connect_error){
  die("ERROR".$conn-connect_error);
}

?>
