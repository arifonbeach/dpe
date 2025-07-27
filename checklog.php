<?php session_start(); ?>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
//$username="root"; // Mysql username 
$password=""; // Mysql password 
//$password=""; // Mysql password 
$db_name="dpe"; // Database name 
//$db_name="uk"; // Database name 
$tbl_name="form"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
//**************
$username=$_POST['username']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// store session data

$row = mysql_fetch_array($result);
//echo $row['name'];
$_SESSION['shagor']= $row['name'] ;
//print $row['name'] . "Thanks, Redirecting";
header("location:Police Station & Upazila of Bangladesh.php");
}
else {
//echo "Wrong Username or Password";
//print "Wrong Username or Password";
header("location:login.php");
}
?>