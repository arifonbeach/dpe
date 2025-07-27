<html>
	<head>
	<title>Directorate of Primary Education	</title>
<link rel="stylesheet" href="style2.css" media="all"
	</head>
<body>

<div><div id="header">

</div>

<div id="logo_heading">
	<div id=logo style="text-align: center"><img src="images/dpe logo.jpg"></img></div>
	<div id="lheading">
		<div id="title_aa"><b>Government of the People's Republic of Bangladesh</b></div>
	<div id="title_large"><b>Directorate of Primary Education</b></div>
	<div id="title_bb"><b>Online Application Form</b></div>
	</div>
</div>	

</div>

<div id="working_area_dbbl_details_all">
	<div id="w_a_t"><b>
	
		<a href="http://localhost/dpe"style="text-decoration:none">Home Page
		</a>
	
	</b></div>

	<div id="fieldset">
		<fieldset>
			<legend class="black12"><strong>Search Result</strong>
			
</legend><div>


<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dpe", $con);

$result = mysql_query("SELECT * FROM dbbl");




echo "<table border='1' align='center' cellpadding='10'>
<tr>
<th>Name</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>Gender</th>
<th>Upazila</th>
<th >Application ID</th>
<th >Address</th>
</tr>";


mysql_query("UPDATE Persons SET Age = '36'
WHERE FirstName = 'Peter' AND LastName = 'Griffin'");


while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row["father's_name"] . "</td>";
echo "<td>" . $row["mother's_name"] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['upazila_name'] . "</td>";
  echo "<td>" . $row['app_Id'] . "</td>";
    echo "<td>" . $row['permanent_add'] . "</td>";

  echo "</tr>";
  }
echo "</table>";

mysql_close($con);







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