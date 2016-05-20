<?php 
	 $db = mysql_connect("localhost","root","");
mysql_select_db("sdu",$db);
	
	if (isset($_POST['text'])){
		$text = $_POST['text'];	
		if ($text == ''){
			unset($text);	
		}	
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
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tbody>

    <tr>
      <td>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
             
              <td valign="top">

					<?php 
					
						if (isset($text)){
							/*We can insert data into database*/
							$result = mysql_query("insert into indexx (text) values ('$text')",$db);
							if ($result == true){
								echo "<p>Data added !</p>";
							}
							else {
								echo "<p>Unfortunately the data wasn't added</p>";	
							}
						}
						
						else {
							echo "<p>You didn't entered all the information need to be inserted into database, please feel all the fields</p>";
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