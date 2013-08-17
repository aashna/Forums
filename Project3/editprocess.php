<body bgcolor="crimson">
<?php
// Connect to server and select database.

$con=mysql_connect("localhost", "root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

session_start();
$f = $_SESSION['rr'];
echo "Topic no. $f<br>";

$editedtopic=$_POST['tp'];
echo"<center><font color='white' size='4'>Topic name successfully changed to <font color='yellow' size='5'> $editedtopic </font>!</font></center><br>";

mysql_select_db("forum",$con);

$sql="SELECT * FROM topic WHERE Id=$f";

mysql_query($sql,$con);

$result3=mysql_query("UPDATE topic SET topic='$editedtopic' WHERE Id=$f");


if (!$result3) 
{ // add this check.
    die('Invalid query: ' . mysql_error());
}




// Exit looping and close connection

mysql_close($con);

?>