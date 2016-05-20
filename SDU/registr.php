<?php
    session_start();
    
    if (isset($_POST['name'])) {
        $name=$_POST['name'];
    if ($name =='') {
        unset($name);}}
    if (isset($_POST['surname'])) {
        $surname=$_POST['surname'];
    if ($surname =='') {
        unset($surname);} }
        if (isset($_POST['email'])) {
          $email = $_POST['email'];
      if ($email == '') {
            unset($email);} }
    if (isset($_POST['password'])) {
            $password=$_POST['password'];
      if ($password =='') {
            unset($password);} }
    
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $password = trim($password);

    include ("connection.php");

    $result = mysql_query("SELECT id FROM reg WHERE email='$email'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    //exit ("Sorry your login already taken. Write other login.");
    echo"<script>alert('Your login taken');</script>";
        exit;
        return false;
    }

    $result2 = mysql_query("INSERT INTO reg (name,surname,email,password) VALUES('$name','$surname','$email','$password')");

    if ($result2=='TRUE')
    {
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;

    header("Location:index.php");
    }
 else {
    echo "Error! You didn't registrated.";
    }
    ?>
