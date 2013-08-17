<!--ENTERING DATA INTO DATABASE FROM REGISTRATION FORM-->

<html>
<body bgcolor="crimson">
<?php

session_start();
$_SESSION['ss']=0;

//Retrieving values from form
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

//Confirming passwords
if($pass==$cpass)

{
echo "Hi <font color='white'> $_POST[names]</font>!! You have successfully registered into our website :)  <br/> <br/><a href='forumpage.php'> Click to go to forums</a>" ;
$_SESSION['ss']=1; 
}
else
{
 echo"Passwords Mismatch!!</br> <br>";
 echo"<a href='regform.php'>GO BACK</a>";
}

//Connecting to server
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create table for entering user info
mysql_select_db("aadb", $con);

$sql = "CREATE TABLE User_Info
(
Username varchar(15),
Password varchar(15)
)";

// Execute query
mysql_query($sql,$con);
$sqq="INSERT INTO User_Info ()
VALUES ('$_POST[names]','$_POST[pass]')";

mysql_query($sqq,$con);

//Closing connection
mysql_close($con);

//Storing the value in a session
$_SESSION['name']='$_POST[names]';
?> 
</body>
</html>