<?php
session_start();

        if(isset($_POST['email'])){$email = $_POST['email'];}
        if(isset($_POST['password'])){$password = $_POST['password'];}

$_SESSION['email'] =  $email ;
    $_SESSION['password'] = $password;


$email = stripslashes($email);
$email = htmlspecialchars($email);
$password = stripslashes($password);
$password = htmlspecialchars($password);
include("connection.php");
 $result = mysql_query("SELECT * FROM reg WHERE email='$email'",$db);
$myrow = mysql_fetch_array($result);
if (empty($myrow['password'])){//exit ("Your login or password is wrong");
unset($_SESSION['email']);
    unset($_SESSION['password']);
    session_unset();
    session_destroy();
    header("Location:../pages/signinerror.php");
}
else {if ($myrow['password']==$password) {
    $_SESSION['email']=$myrow['email'];
    $_SESSION['id']=$myrow['id'];
    $sur = mysql_query("SELECT surname FROM reg WHERE email='$email'",$db);
    $userrow = mysql_fetch_array($sur);
    $surname = $userrow['surname'];

    $uname = mysql_query("SELECT name FROM reg WHERE email='$email'",$db);
    $namerow = mysql_fetch_array($uname);
    $name = $namerow['name'];

    $_SESSION['name'] = $name;
    $_SESSION['surname']= $surname;
    header("Location:index.php");
}else {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    session_unset();
    session_destroy();
    header('Location:../pages/signinerror.php');

    }
    }
?>
