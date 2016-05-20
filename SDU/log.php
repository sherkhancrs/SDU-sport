<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sport Club SDU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
</head>
<style>
body {
  font: 400 15px/1.8 Lato, sans-serif;
      color: #F0F8FF;
      background-color:#2C3539;
}
.container {
      padding: 100px 120px;
  }
h3 {
  text-align: center;
  color: #4EE2EC !important ;
}
h2 {
   text-align: center;
  color: #f62217 !important;
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
    </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Главная</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Футбол<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">SFC</a></li>
            <li><a href="sfl.php">SFL</a></li>
          </ul>
        </li>
        <li><a href="v.php">Волейбол</a></li>
        <li><a href="b.php">Баскетбол</a></li>
        <li><a href="video.php">Видео</a></li>
        <li><a href="#">Фото</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span>Регистрация</a></li>
        <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span>Вход</a></li>
  </div>
</nav>

<div class="container">
  <h3>Войти</h3>
  <form class="form-horizontal" role="form" action="signin.php" method="POST" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Почта:</label>
      <div class="col-md-8">          
        <div class="form-group">
          <input class="form-control" id="inputdefault" type="text" name="email" placeholder="Введите почту" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Пороль:</label>
      <div class="col-md-8">          
        <input type="password" class="form-control" id="inputdefault" name="password" placeholder="Введите пороль" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-md-8">
        <button type="submit" class="btn btn-primary">Войти</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>


</body>
</html>
