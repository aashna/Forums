<?php

// Connect to server and select database.
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("admin",$con);

$SNO=$_REQUEST['sno']; 

$sql="SELECT * FROM forums WHERE sno=$SNO";

$result3=mysql_query($sql,$con);

if (!$result3) 
{ // add this check.
    die('Invalid query: ' . mysql_error());
}

?>
<I><font size='4'><a href='loggedout.php'>LOGOUT</a></font></I><br/>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="red">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Forum</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result3))
{// Start looping table row
?>
<tr>
<td bgcolor="#FFFFFF"><a href="main_forum.php?SNO=<?php echo $rows['sno']; ?>"><?php echo $rows['forum']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>


<?php
// Exit looping and close connection
}
mysql_close($con);
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="addforum.php"><strong>Create New Forum</strong> </a> </td>
</tr>
</table>








