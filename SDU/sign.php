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
<?php
include("navs.php")
?>

<div class="container">
  <h3>Sign up</h3>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">          
        <div class="form-group">
          <input class="form-control" id="inputdefault" type="text" placeholder="Enter your name">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Surname:</label>
      <div class="col-sm-10">          
        <div class="form-group">
          <input class="form-control" id="inputdefault" type="text" placeholder="Enter your surname">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <div class="form-group">
          <input class="form-control" id="inputdefault" type="text" placeholder="Enter email">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="inputdefault" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="inputdefault" placeholder="Enter password again">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>


</body>
</html>
