<?php session_start();
error_reporting(0);

$db=mysql_connect("localhost","root","");
mysql_select_db(sdu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sport Club SDU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font: 400 15px/1.8 Lato, sans-serif;
      color: #F0F8FF;
      background-color:#2C3539;
}
.container {
      padding: 80px 120px;
  }
h3 {
  text-align: center;
}
.navbar {
      font-family: Lato, sans-serif;
      margin-bottom: 0;
      background-color: #0C090A;
      border: 0;
      
  }
.navbar-nav li.active a{
   color: #f62217 !important;
}
.navbar li a {
  color: #4EE2EC !important;
}
.navbar-nav li a:hover{
  color: #f62217 !important;
}
.navbar-inverse .navbar-toggle {
      border-color: transparent;
  }
.media-object{
  height: 50px ;
  margin-top: 5px ;
}
  }
</style>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="index.php"><img class="media-object" src="logo.jpg" alt="SCS">
    </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Главная</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Футбол<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">SFC</a></li>
            <li><a href="sfl.php">SFL</a></li>
          </ul>
        </li>
        <li class="active"><a href="#">Волейбол</a></li>
        <li><a href="b.php">Баскетбол</a></li>
        <li><a href="video.php">Видео</a></li>
        <li><a href="#">Фото</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span>Регистрация</a></li>
        <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span>Вход</a></li>
        <li><a href="#"<span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a href="#" class="thumbnail">
        <img src="https://pp.vk.me/c630920/v630920858/17a02/d9k0qbvjbF4.jpg" alt="Altyn Auyl Volleyball">
      </a>
      <p>Здравствуйте,СДУ-шники!!!
Приглашаем всех ЖЕЛАЮЩИХ на тренировки по волейболу.

Время : -Пацанам 19:00 - 21:00 вторник,суббота
-Девушкам 18:30-20:30 четверг
Место проведения: школа в мкр. Алтын Ауыл.

Обращаться: +77755681163 https://vk.com/id203654858</p>
    </div>
    <div class="col-md-6">
      <a href="#" class="thumbnail">
        <img src="https://pp.vk.me/c627218/v627218909/37569/qYBqB4AIf6Q.jpg">
      </a>
      <p>Сегодня особый день для наших волейболистов, потому что наша сборная по волейболу в отборочном турнире показав блестящую игру, пробились в финальную часть лиги любителей волейбола, попав в высшую группу где одни сильные команды. Учитывая что у нас этот вид спорта не особо развит, можно сказать это хорошее достижение. Огромное спасибо ребятам за этот большой труд, вы добились своего упорно работав, не смотря ни на что. Желаем вам от всей души удачи!
Ну а университет наш почти что не поддерживает наших на соревнованиях, надеемся в этот раз все будет иначе...</p>
    </div>
    <div class="col-md-6">
      <a href="#" class="thumbnail">
        <img src="https://pp.vk.me/c633129/v633129909/12901/tIobOKPOkdY.jpg">
      </a>
      <p>PERFECT!!!! Ох как играли наши сегодня! Они дали бой очень сильным командам! Сумасшедшая игра, весь зал ахнул. Завтра все решится. У нас есть хороший шанс на выход в четвертьфинал чемпионата среди любителей волейбола города Алматы (не подумайте что там все любители, те же профессионалы которые играют в больших соревнованиях)
Поддержим наших?!</p>
    </div>
    <?php 
      $words=mysql_query("SELECT * FROM v ");
      $show=mysql_fetch_array($words);

      do{
        echo $show['text'];
      } while ($show = mysql_fetch_array($words));
      ?>
  </div>

</body>
</html>
