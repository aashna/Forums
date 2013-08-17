<body bgcolor="crimson"></body>
<?php
//PAGE FOR DELETING A POST

// Connect to server and select database.
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 //Selecting database 'forum'
mysql_select_db("forum",$con);
session_start();
$g=$_SESSION['rr'];

//Adding query to delete the selected row
$sql="DELETE FROM topic WHERE Id=$g";

$result3=mysql_query($sql,$con);

if (!$result3) 
{ // add this check.
    die('Invalid query: ' . mysql_error());
}

if($result3)
{
echo "<br>Topic deleted!<br>";}

// Exit looping and close connection
mysql_close($con);

?>