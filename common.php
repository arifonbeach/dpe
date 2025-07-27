
<div id="header">
	<img src="images/headback.jpg"></img>
</div>

<div id="logo_heading">
	<div id=logo style="text-align: center"><img src="images/dpe logo.jpg"></img></div>
	<div id="lheading">
		
		<div id="title_aa"><b>Government of the People's Republic of Bangladesh</b></div>
		
		<div id="date">
		<b>

			<?php
			
			
			
			
			
			
$current_date=date("d/m/Y");
$timeset=strtotime("+72 hour");

$dbtime=date("h:i:s A",$timeset);

echo "Date: $current_date"."<br>";
echo time('h.i.s, A')."<br>";

$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "You have just 3 day to submit.<br>Last date of submiting: ".date("d/m/Y", $timeset ). " till 11.59pm";

//echo "Tomorrow is ".date("Y/m/d", $tomorrow);
			
			
echo "<br />";

			?>
		</b>
		</div>
				
	<div id="title_large"><b>Directorate of Primary Education</b></div>
	<div id="title_bb"><b>Online Application Form</b></div>
	</div>
</div>	

