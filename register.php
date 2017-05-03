<html>
<body>
 <h1> This is a register page</h1>
 <form method = 'post' action = 'index.php'>
  <strong> Username: </strong><input type="text" name="reg_uname" value="" /> </br> </br>
  <strong> Password: </strong><input type="password" name="reg_password" value=""/> </br></br>
  <strong> First Name: </strong><input type="text" name="reg_fname" value="" /> </br> </br>
  <strong> Last Name: </strong><input type="text" name="reg_lname" value="" /> </br> </br>
  <strong> Gender: </strong><input type="text" name="reg_sex" value="" /> </br> </br>
  <strong> Phone Number: </strong><input type="tel" name="reg_phone" value="" /> </br> </br>
  <strong> E-mail: </strong><input type="text" name="reg_email" value="" /> </br> </br>
  <strong> Birth Date: </strong><input type="date" name="reg_bday" value="" /> </br> </br>


  <input type="hidden" name="action" value="registrar" /></br></br>
  <input type="submit" value="Register" />
 </form>
 <form action="login.php" method = "post">
  <input type='submit' value='try to login'/>
 </form>
</body>
</html>
