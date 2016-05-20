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
        <li><a href="v.php">Волейбол</a></li>
        <li class="active"><a href="#">Баскетбол</a></li>
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
        <img src="https://pp.vk.me/c630921/v630921018/16487/9OD8_sfi5FA.jpg" alt="Altyn Auyl Basketball">
      </a>
      <p>Добрый вечер, студенты SDU.
  Приглашаем всех желающих на тренировки по баскетболу.

  Место проведения: школа в мкр. Алтын Ауыл.
  Время: 19:00 - 21:00 каждое воскресенье.
  Требования: желание.

  Обращаться: +77753021942 vk.com/maxatshalgimbay</p>
    </div>
    <div class="col-md-6">
      <a href="#" class="thumbnail">
        <img src="https://pp.vk.me/c629526/v629526018/1a594/Las3lkoNUtU.jpg" alt="Altyn Auyl Basketball">
      </a>
      <p>Приходите на тренировки по баскетболу.
Каждую субботу в 18:50, в школе Алтын Ауыл.</p>
    </div>
  </div>

</body>
</html>
