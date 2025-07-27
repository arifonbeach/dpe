<html>
	<head>
	<title>Directorate of Primary Education	</title>
<link rel="stylesheet" href="style.css" media="all">
<link href="" rel="stylesheet">

<script>
function printContent('div1'){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementByID(div1).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = printcontent;
	
}
</script>
	
	</head>
<body>

<div><div id="header">
	<img src="images/headback.jpg"></img>
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

<div id="working_area">
	<div id="w_a_t"><b>
	
		<a href="http://localhost/dpe"style="text-decoration:none">Home Page
		</a>
	
	</b></div>

	<div id="div1">
		<div id="fieldset">
			<fieldset>
				<legend class="black12"><strong>Search Result</strong>
				
				</legend>
					<div>
						<?php
						$host="localhost"; // Host name 
						$username="root"; // Mysql username 
						$password=""; // Mysql password 
						$db_name="dpe"; // Database name 
						$tbl_name="dbbl"; // Table name 

						mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
						mysql_select_db("$db_name")or die("cannot select DB");

						// username and password sent from form 
						$app_id=$_POST['app_id']; 
						$gender=$_POST['gender']; 

						$sql="SELECT * FROM $tbl_name WHERE app_id='$app_id' and gender='$gender'";
						$result=mysql_query($sql);
						$count=mysql_num_rows($result);
						// If result matched $myusername and $mypassword, table row must be 1 row

						if($count==1){

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



						}
						else {

						echo "<h1 align='center'>Wrong Application Identification number and Sex. Please, inseart again.</h1>";
						}
						?>
						<button onclick="printContent('fieldset')">Print Content</button>
					</div>
			</fieldset>
		</div>
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