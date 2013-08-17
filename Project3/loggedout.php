<?php
//Destroying session once the user logs out
session_start();
session_destroy();

//Starting a new session
session_start();
$_SESSION['ss']=2;
?>

<html>
<body  bgcolor="crimson"></body>

<!--Login by user-->

<font color="white" face="comic sans ms" size="5">Login to our website!<br><br></font>
<fieldset>
<legend>LOGIN</legend>
<form action="loginsuccess.php" method="post">
Username:<input type="text" name="names"><br/>
Password:<input type="password" name="pwd"><br/>
</fieldset></br>
<input type="submit" value="Login">
</form>

</html>
