<?php
session_start();
$ss=$_SESSION['ss'];
if($ss==2)
{
$xx=$_POST["username"];
$yy=$_POST["pwd"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("aadb",$con);
$result=mysql_query("SELECT*FROM User_Info");
while($row=mysql_fetch_array($result)) 
{
if($row['Username']==$xx)
if($row['Password']==$yy)
{
$ss=1 ; 
break;
}
else
$ss=10;
}
if(ss==10)
{
echo "User Id / Password do not match<br><a href='loggedout.php'>Go back</a>";
}
mysql_close($con);
}
if($ss==1)
{$_SESSION['ss']=$ss;
echo"HOME PAGE";
}
?>


