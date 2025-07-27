<html>
	<head>
	<title>Directorate of Primary Education	</title>
<link rel="stylesheet" href="style.css" media="all"
	</head>
<body>

<div><?php include("common.php"); ?></div>
<div><?php include("navbar.php"); ?></div>

<div id="working_area">
	<div id="w_a_t"><b>Download Admit Card</b></div>

	<div id="fieldset">
		<fieldset>
			<legend class="black12">Sign in</legend>
			
			<div><?php include("form.php"); ?></div>
			
		</fieldset>
	</div>

	<div style="text-align: center">
		Narail, Meherpur, Munshigonj, Shariatpur and Feni District Only
	</div>
	
	<!--<div>
	


<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail( "someone@example.com", "Subject: $subject",
  $message, "From: $email" );
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>


	</div>-->
	
	
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