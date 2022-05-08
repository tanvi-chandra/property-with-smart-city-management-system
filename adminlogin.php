<!DOCTYPE html>
<html lang="en">
<head>
	<title>login page</title>
	<link rel="stylesheet" href="login.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
   <div class="login">
   <form action="adminL.php" method="post">
	  <div class="con">
	  <header class="head-form">
		 <h2>Admin Log In</h2>
		 <p>enter your adminid and password !!</p>
	  </header>
	  <br>
	  <div class="field-set">
			<span class="input-item">
			  <i class="fa fa-user-circle"></i>
			</span>
			<input class="form-input" name="adminid" id="txt-input" type="text" placeholder=" ENTER ADMIN ID" autocomplete="off" required>
		
		 <br>
		 <span class="input-item">
		   <i class="fa fa-key"></i>
		  </span>
		 <input class="form-input" type="password" placeholder="ENTER PASSWORD" autocomplete="off" id="pwd"  name="pass" required>
		<span>
		   <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
		</span>
		 <br>
		   <button class="log-in" name="submit"> Log In</button>
	  </div>
	  <div class="other">
		 <button class="btn submits frgt-pass">Forgot Password</button>
		 <a href="adminreg.php">
		 <button class="btn submits sign-up">Sign Up 
		 <i class="fa fa-user-plus" aria-hidden="true"></i>
		 </a>
		 </button>
	  </div>
	 </div>
   </form>
   </div>
   </body>
   </html>