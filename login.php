
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>login page</title>
     <link rel="stylesheet" href="login.css">
     <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
 </head>
 <body>
    <div class="login">
    <form action="connectionL.php" method="post">
       <div class="con">
       <header class="head-form">
          <h2>User Log In</h2>
          <p>enter your username and password !!</p>
       </header>
       <br>
       <div class="field-set">
             <span class="input-item">
               <i class="fa fa-user-circle"></i>
             </span>
             <input class="form-input" name="CustomerId" id="txt-input" type="text" placeholder=" ENTER Id" required>
         
          <br>
          <span class="input-item">
            <i class="fa fa-key"></i>
           </span>
          <input class="form-input" name="pass" type="password" placeholder="ENTER PASSWORD" id="pwd"  name="password" required>
         <span>
            <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
         </span>
          <br>
            <button type="submit" class="log-in" name="submit"> Log In    
            </button>
       </div>
       <div class="other">
          <button class="btn submits frgt-pass">Forgot Password</button>
          <a href="register.php">
          <button type="submit" class="btn submits sign-up" name="submitt" >Sign Up 
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          </a>
          </button>
       </div>
      </div>
    </form>
    </div>
    </body>
    </html>