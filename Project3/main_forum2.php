<?php

// Connect to server and select database.
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("forum",$con);

$SNO=$_REQUEST['sno'];

echo "$SNO";

session_start();
$_SESSION['mm']="$SNO";

$sql="SELECT * FROM topic WHERE forum_sno=$SNO ";
// ORDER BY Id DESC is order result by descending

$result1=mysql_query($sql,$con);
if (!$result1) 
{                  // add this check.
    die('Invalid query: ' . mysql_error());
}

?>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="red">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>S.no.</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result1))
{                      // Start looping table row
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['Id']; ?></td>
<td bgcolor="#FFFFFF"><a href="viewtopic.php?Id=<?php echo $rows['Id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['views']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php  echo $rows['replies']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>


<?php               // Exit looping and close connection
}
mysql_close();
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="topic2.php"><strong>Create New Topic</strong> </a>  | <font size='4'><a href='loggedout.php'>  LOGOUT</a></font></td>
</tr>
</table>
