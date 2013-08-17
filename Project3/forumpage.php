<body bgcolor="crimson"></body>
<?php
//PAGE DISPLAYING ALL THE FORUMS

// Connect to server 
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//Selecting database admin  
mysql_select_db("admin",$con);
$sql="SELECT * FROM forums ORDER BY sno DESC";
// ORDER BY Id DESC is order result by descending

$result1=mysql_query($sql,$con);
if (!$result1) 
{ // add this check.
    die('Invalid query: ' . mysql_error());
}
?>

<!--Table for displaying the forums-->
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="red">
<tr>
  <td width="6%" align="center" bgcolor="#E6E6E6"><strong>S.no.</strong></td>
  <td width="53%" align="center" bgcolor="#E6E6E6"><strong>Forum</strong></td>
  <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result1))
{// Start looping table row
?>

<!--retrieving forums from forum database-->
<tr>
  <td bgcolor="white"><?php echo $rows['sno']; ?></td>
  <td bgcolor="white"><a href="main_forum.php?sno=<?php echo $rows['sno']; ?>"><?php echo $rows['forum']; ?></a><BR></td>
  <td align="center" bgcolor="white"><?php echo $rows['datetime']; ?></td>
</tr>


<?php
// Exit looping and close connection
}
mysql_close();
?>

<tr>
 <td colspan="5" align="right" bgcolor="#E6E6E6"> <font size='4'><a href='loggedout.php'>LOGOUT</a></font></td>
</tr>
</table>
