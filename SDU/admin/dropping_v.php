<?php 
	$db = mysql_connect("localhost","root","");
mysql_select_db("sdu",$db);
	
	if (isset($_POST['id'])){
		$id = $_POST['id'];		
	}
	
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title></title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    
    <tr>
      <td>
        <table width="690" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              
              <td valign="top">

					<?php 
					
						if (isset($id)){
							/*We can insert data into database*/
							$result = mysql_query("delete from v where id ='$id'",$db);
							if ($result == true){
								echo "<p>Data deleted !</p>";
							}
							else {
								echo "<p>Unfortunately the data wasn't deleted</p>";	
							}
						}
						
						else {
							echo "<p>You didn't choose any of the lessons, so we cannot delete anything</p>";
						}
					?>
                                    
              </td>
            </tr>
          </tbody>
      </table></td>
    </tr>
   
  </tbody>
</table>
</body>
</html>