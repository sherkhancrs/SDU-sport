<?php $db = mysql_connect("localhost","root","");
mysql_select_db("sdu",$db);?>
<!doctype html>
<html>
<head>
  <title>Add news</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font: 400 15px/1.8 Lato, sans-serif;
      color: black;
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
        <li><a href="#">Волейбол</a></li>
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


<meta charset="utf-8">
<title></title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tbody>
    
    <tr>
      <td>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
       
              <td valign="top">
              
					
					
                    
                    <form action="add_news2.php" method="post" name="form1">
                      
                      <p>
                        <label for="text">Enter the whole text of your article with any tags:</label>
                        <br>
<textarea name="text" cols="45" rows="20" id="text"></textarea>
                      </p>
                      
                      
                      
                      <p>
                        <input type="submit" name="submit" id="submit" value="Send article to db">
                        <br>
                      </p>
                      
                      
                    </form>
                                
              </td>
              
            </tr>
          </tbody>
      </table></td>
    </tr>
  </tbody>
</table>

</body>
</html>