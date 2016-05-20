<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
session_unset();
session_destroy();

header ("Location:index.php");

?>s
