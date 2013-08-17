<body bgcolor="crimson"></body>
<?php
//ADDING A TOPIC

// Connect to server and select database.
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 //Retrieving the username
session_start();
$usn=$_SESSION['us'];
echo "<b><center><font color='white'>***</font> Hi <font color='yellow'>$usn</font> ! <font color='white'>***</font></center></b><br><br>";

$topic=$_POST['topic'];

//Retrieving sno from session
$fsno=$_SESSION['mm'];
echo "<center>(forum no.=$fsno)</center><br><br>";

$datetime=date("d/m/y h:i:s"); //create date time

//Selecting database forum and inserting values into it
mysql_select_db("forum", $con);
$sqq="INSERT INTO topic(topic,datetime,forum_sno)
VALUES('$topic',  '$datetime','$fsno')";

$result=mysql_query($sqq,$con);

if($result)
{
 echo "  <center><font color='white'>You have successfully posted your topic!</font></center><BR>";
 echo "<center><a href='main_forum.php?sno= $fsno'><font size='5'>View the forum</font><br><br></a></center>";
}
else 
{
 echo "ERROR";
}
 echo"<I><center><font size='4'><a href='loggedout.php'>LOGOUT</a></font></center></I>";
 
//Closing connection
mysql_close();
?>