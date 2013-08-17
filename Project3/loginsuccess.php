<body bgcolor="crimson"></body>
<?php
//PAGE DISPLAYED ONCE THE LOGIN IS SUCCESSFUL

session_start();

$ss=$_SESSION['ss'];
if($ss==2)

{                                                //Retrieving data from form
$xx=$_POST["names"];
$_SESSION['us']="$xx";
$yy=$_POST["pwd"];
                                                   
												  
$con=mysql_connect("localhost","root","");       //Connecting to server
if(!$con)
{
die('Could not connect:'.mysql_error());
}

if($xx=="admin1")                                //Connecting to add forums page if user=admin
{echo "<a href='addforum.php'>Create New Forum</a>";}
else

{echo "<a href='forumpage.php'>Add a topic</a><br>";}; //connecting to forums page for other users

 
mysql_select_db("aadb",$con);                    //Selecting database "aadb"   
$result=mysql_query("SELECT*FROM User_Info");

while($row=mysql_fetch_array($result)) 
{
if($row['Username']==$xx)                       //Matching username and password from table
if($row['Password']==$yy)
{
$ss=1 ; 
break;
}
else
$ss=2;
}
if($ss==2)
{
echo "User Id / Password do not match<br><br><br><a href='loggedout.php'>Go back</a>";
}
mysql_close($con);
}
if($ss==1)
{$_SESSION['ss']=$ss;

}?>
