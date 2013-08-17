<!--PAGE FOR ADDING AN ANSWER TO THE TOPIC-->

<body bgcolor="crimson"></body>
<?php


// Connect to server and select database.
$con=mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

 //Selecting database 'forum'
mysql_select_db("forum",$con);

$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM answer WHERE question_id='$id'";
$result6=mysql_query($sql);
$rows=mysql_fetch_array($result6);

if (!$result6) 
{ // add this check.
    die('Invalid query: ' . mysql_error());
}

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO answer(question_id, a_id, a_name, a_email, a_answer, a_datetime)
VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);

if($result2){
echo "Successful<BR>";
echo "<a href='viewtopic.php?Id=".$id."'>View your answer</a>";

// If added new answer, add value +1 in reply column 

$sql3="UPDATE topic SET replies='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);

}
else {
echo "ERROR";
}

mysql_close();
?>
