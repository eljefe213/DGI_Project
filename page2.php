<?php
$username = $_POST["username"];
$password = $_POST["password"];

if($username=="John Doe" AND $password=="qwertz123")
   {
   echo "Welcome to the internal area" . $username . "!";
   }
else
   {
   echo "Access denied";
   }
?>
