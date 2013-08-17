<!--REGISTRATION FORM FOR NEW USER-->

<html>
<body>
<h1 style="text-align:center">Create a new Account</h1>
<hr/>
<b>Name</b> <br/>
<form action="enter.php" method="post">
  <input type="text" name="fn" value="first name">  <input type="text" name="ln" value="last name"> 
     <br/> <br/>
     <b>Choose a Username</b> <br/>
  <input type="text" name="names"> @newmail.com 
     <br/> <br/>
     <b>Create a Password</b> <br/>
  <input type="password" name="pass">
     <br/> <br/>
     <b>Confirm your Password</b> <br/>
  <input type="password" name="cpass">                                        <!-- To recheck the entered password-->
     <br/> <br/>
     <b>Birthday</b> <br/>
 
 <table>                                                                     <!--for better outlook table is made-->
   <tr>
   <th>Date</th> <th> Month </th> <th> Year </th>
   </tr>
   <tr>
   <td>
   <select name='date'>
   
<?php                                                                       //use of php inside html for creating drop down
for ($i=1;$i<=31;$i++)                                                      
echo"<option>$i</option>";
?>

</select>
</td>
<td>
<select name='month'>

<?php
for ($i=1;$i<=12;$i++)
echo"<option>$i</option>";
?>

</select>
</td>
<td>
<select name='year'>

<?php
for ($i=1901;$i<=2012;$i++)
echo"<option>$i</option>";
?>

</select>
</td>
</tr></table>
  <br/>
  <b>Gender</b> <br/>
   Male<input type="radio" name="gender" value="m" checked="checked">                   <!-- checked is used to tick the box by default -->
   Female<input type="radio" name="gender" value="f">
   <br/><br/>
<hr/>

<input type="hidden" name="agree" value="0" />                                       <!-- this is used to remove the error when checkbox is not checked -->
<input type="checkbox" name="agree" value="1" checked="checked"/>                    <!-- checked is used to tick the box by default -->
I Agree to the <font color="#000099"><i><b>Terms Of Service</b></i></font> and<font color="#000099"><i><b> Privacy Policy</b></i></font>
<hr/>
<br/>
<p style="text-align:center">
  <input type="submit" value="Make an Account">
  <input type="reset" value="Fill Again">
</p>
</form>
</body>
</html>