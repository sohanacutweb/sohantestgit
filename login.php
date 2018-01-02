<form name="loginForm" id="loginForm" method="POST">
<input type="hidden" name="action" value="user_login">
<div class="form-group">
    <label for="email">User Name:</label>
    <input type="text" class="form-control" name="username" id="username">
  </div>
  <div class="form-group">
    <label for="pass">Password:</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
   <button type="submit" name="login_button" id="login_button" class="login" data-loading-text="Loading---"> LOGIN 
			</button>
  </form>