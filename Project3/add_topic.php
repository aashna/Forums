<?php

echo "Hi <font color='red'>'$_POST[name2]'</font> !!<br><br>";

// Connect to server and select database.
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// get data that sent from form

$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name2'];
$email=$_POST['email'];

session_start();
$unm=$_SESSION['us'];
echo "$unm";



$datetime=date("d/m/y h:i:s"); //create date time

mysql_select_db("forum", $con);
$sqq="INSERT INTO topic(topic,name,email,datetime)
VALUES('$topic',  '$name', '$email', '$datetime')";
$result=mysql_query($sqq,$con);

if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View the forum<br><br></a>";
}
else {
echo "ERROR";
}
echo"<I><font size='4'><a href='loggedout.php'>LOGOUT</a></font></I>";
mysql_close();

?>