<body bgcolor="crimson"></body>
<?php
//Adding forum by the admin [username=admin, password=aashna]

// Connect to server and select database.
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// get data  sent from form
$forum=$_POST['forum'];
$datetime=date("d/m/y h:i:s"); //create date time

echo "Hi admin1! <br>";

//Selecting database admin
mysql_select_db("admin", $con);
$sqq="INSERT INTO forums(forum,datetime)
VALUES('$forum',  '$datetime')";

$result=mysql_query($sqq,$con);

if($result)
{
 echo " Forum Created!<BR>";
 echo "<a href=forumpage.php>View the forum<br><br></a>";
}
else
{
 echo "ERROR";
}
echo"<I><font size='4'><a href='loggedout.php'>LOGOUT</a></font></I>";
mysql_close();

?>