<!DOCTYPE html>
<html>
<body>
<form method="post" action="save_u_data.php">
  First name:<br>
  <input type="text" name="firstname" required />
  <br>
  Last name:<br>
  <input type="text" name="lastname" required />
  <br>
  E-mail:<br>
  <input type="text" name="email_addres" required />
  <br>
  Username:<br>
  <input type="text" name="user_name" required />
  <br>
  Password:<br>
  <input type="password" name="pass_word" required />
  <br><br>
  <input type="submit" name='save_user' value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>