<?php

// Connect to server 
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {  die('Could not connect: ' . mysql_error());}
  
// Selecting database forum
mysql_select_db("forum",$con);

//Storing the value of Id from address bar
$ID=$_REQUEST['Id']; 

//Storing Id in a session
session_start();
$_SESSION['rr']="$ID";
$_SESSION['pp']="$ID";

// Displaying info from table which matches the Id
$sql="SELECT * FROM topic WHERE Id=$ID";

$result3=mysql_query($sql,$con);

if (!$result3) 
{                                     // add this check.
    die('Invalid query: ' . mysql_error());
}

?>

<!--Creating a table for displaying the topic info-->
<I><font size='4'><a href='loggedout.php'>LOGOUT</a></font></I><BR><br/>
<center><font size='5' color='white'><u>Topic details are given below</u></font></center><br><br>
<center><I><font size='4' color='white'>You can edit or delete your topic here...</font></I></center><br>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="red">
   <tr>
     <td width="6%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
     <td width="15%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
     <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Email</strong></td>
     <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
     <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Delete</strong></td>
     <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Edit</strong></td>
   </tr>

<?php
while($rows=mysql_fetch_array($result3))
{// Start looping table row
?>
<!--PAGE DISPLAYING THE INFORMATION OF THE SELECTED TOPIC-->

<body bgcolor="crimson"></body>
<!--Retrieving info-->
<tr>
  <td bgcolor="#FFFFFF"><?php echo $rows['topic']; ?></td>
  <td bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
  <td align="center" bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
  <td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
  <td align="center" bgcolor="#FFFFFF"><a href='delete.php'>Delete</a></td>
  <td align="center" bgcolor="#FFFFFF"><a href='edit.php'>Edit</a></td>
</tr>

<?php
// Exit looping and close connection
}
mysql_close($con);
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="topic2.php"><strong>Create New Topic</strong> </a> | <a href="main_forum.php"><strong>View Forum</strong></a></td>
</tr>
</table>


<?php

//Connect to server
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
//Selecting database forum
mysql_select_db("forum",$con);
$ID=$_REQUEST['Id']; 
$sqq="SELECT * FROM answer WHERE question_id=$ID";

$result4=mysql_query($sqq,$con);

if (!$result4) 
{ // add this check.
 die('Invalid query: ' . mysql_error());
}
?>

<br/>
<br/>

<center><font size='5' color='white'><u>Answers posted by users are given below</u></font></center><br><br>
<!--Creating a table for answers-->
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="red">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Id</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Email</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Answer</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result4))
{// Start looping table row
?>

<!--Retrieving info-->
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['a_id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['a_name']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_email']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_answer']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['a_datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
mysql_close($con);
?>
</table>

<?php
$con=mysql_connect("localhost", "root", "");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$usn=$_SESSION['us'];
mysql_select_db("forum",$con);

$sql3="SELECT views FROM topic WHERE Id=$ID";
$result5=mysql_query($sql3);

if (!$result5) 
{ // add this check.
    die('Invalid query: ' . mysql_error());
}

$rows=mysql_fetch_array($result5);
$view=$rows['views'];

// if have no counter value set counter = 1
if(empty($view))
{
$view=1;
$sql4="INSERT INTO topic(views)
 VALUES('$view') WHERE Id=$ID";
$result4=mysql_query($sql4);
}

// count more value
$addview=$view+1;
$sql5="UPDATE topic SET views='$addview' WHERE Id=$ID";
$result5=mysql_query($sql5);

mysql_close();
?>

<BR>
<center><font size='5' color='white'><I>Add an answer to the topic!</I></font></center><br>
<!--Adding an answer to the post-->
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
 <tr>
 <form name="form1" method="post" action="add_answer.php">
 <td>
 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
 <tr>
   <td width="18%"><strong>Name</strong></td>
   <td width="3%">:</td>
   <td width="79%"><input name="a_name" type="text" id="a_name" size="45" value="<?php echo"$usn"?>"></td>
 </tr>
<tr>
  <td><strong>Email</strong></td>
  <td>:</td>
  <td><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
  <td valign="top"><strong>Answer</strong></td>
  <td valign="top">:</td>
  <td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input name="id" type="hidden" value="<? echo $ID; ?>"></td>
  <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>







