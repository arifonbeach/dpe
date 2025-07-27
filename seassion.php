<html>
	<head>
	<title>Directorate of Primary Education	</title>
<link rel="stylesheet" href="style.css" media="all"
	</head>
<body>

<div><?php include("common.php"); ?></div>

<div id="working_area">
	<div id="w_a_t">
	<div style="text-align:center">
<a href="http://localhost/dpe"style="text-decoration:none; color: #F0F; font-size: 25px; vertical-align: middle; text-align: center;"><strong>Home Page</strong></a>
	  <p><b>Welcome</b> </p>
</div>

	<div id="fieldset">
		<fieldset>
			<legend class="black12">User Information
			
			</legend><div>
<?php

$fname=$_POST["name"];
$fage=$_POST["age"];
$femail=$_POST["e-mail"];
$fusername=$_POST["username"];
$fpassword=$_POST["password"];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("dpe", $con);

mysql_query("INSERT INTO form(`name`, `age`, `e-mail`, `username`, `password`) VALUES('$fname','$fage','$femail','$fusername','$fpassword')");
echo "<h4>Your record successfully added. Please, save or remind it for future use.</h4>";

mysql_select_db("dpe", $con);

$result = mysql_query("SELECT * FROM form");

  echo "Your user name is: ". $_POST['name']."<br>";
  echo "Your are " . $_POST['age'] . " years old"."<br>";
  echo "Your E-mail address is: " . $_POST['e-mail'] . "<br>";
  echo "Your Username is: " . $_POST['username'] . "<br>";
  echo "Your password is: " . $_POST['password'] . "<br>"."<br>";

mysql_close($con);		
?>
            </div>
			
		</fieldset>
	</div>

	<div style="text-align: center">Narail, Meherpur, Munshigonj, Shariatpur and Feni District Only</div>
</div>

<div id="footer" align="center"><div id="fot_text"> For more information, please visit www.dpe.gov.bd
</div>
</div>
<br>



<div id="animated_footer">
	<table class="footer_table">
	   <tr>
		  <td  align="left">&#169; 2015 dpe, directorate of primary education, all rights reserved.</td>
		  <td align="right" float="right";>powered by:</td>
		  <td  align="right"><img src="images/teletalk_animation.gif"></td>
	   </tr>
	</table>
</div>

</body>
</html>