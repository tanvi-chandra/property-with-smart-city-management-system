<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        header{
          width: 100%;
          height: 100vh;
          background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)), url('bg11.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
        nav{
          width: 100%;
          height: 15vh;
          background: rgba(0,0,0,0.2);
          color: white;
          display: flex;
          justify-content: space-between;
          align-items: center;

        }
        nav .logo{
          width: 25%;
          text-align: center;
          font-weight: bolder;
          font-size: 30px;
        }
        nav .menu{
          
          display: flex;
          width: 40%;
          justify-content: space-around;
        }
        nav .menu a{
          width: 25%;
          text-decoration: none;
          color: white;
          font-weight: bold;
          font-size: 25px;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .menu a:hover{
          color: red;
        }
        main{
          width: 100%;
          height: 85vh;
          display: flex;
          justify-content: center;
          align-items: center;
          text-align: center;
          color: white;

        }
        section h3{
          font-size: 35px;
          font-weight: 200;
          letter-spacing: 3px;
          text-shadow: 1px 1px 2px black;
        }
        section h1{
          margin: 30px 0 20px 0;
          font-size: 55px;
          font-weight: 700;
          text-shadow: 2px 1px 5px black;
          text-transform: uppercase;
        }
        section p{
          font-size: 25px;
          word-spacing: 2px;
          margin-bottom: 25px;
          text-shadow: 1px 1px 1px black;
        }
        section a{
          padding: 12px 30px;
          border-radius: 4px;
          outline: none;
          text-transform: uppercase;
          font-size: 13px;
          font-weight: 500;
          text-decoration: none;
          letter-spacing: 1px;

        }
        .about-section{
              font-family: cursive;
              box-sizing: border-box;
              padding: 50px;
                text-align: center;
                background-color:lightblue;
                color: black;
          }
          .dropbtn {
            background: #fff;
            color: #000;
            padding: 16px;
            font-size: 16px;
            font-family: cursive;
            border-radius: 20px;
          }
          .dropbtn1 {
            background: #00b894;
            color: white;
            padding: 16px;
            font-size: 16px;
            font-family: cursive;
            border-radius: 20px;
          }
          .dropdown {
            position: relative;
            display: inline-block;
          }
          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }
          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }
          .dropdown-content a:hover {background-color: #ddd;}
          .dropdown:hover .dropdown-content {display: block;}
          .dropdown:hover .dropbtn {background-color: rgb(246, 255, 117);}
          .dropdown:hover .dropbtn1 {background-color: rgb(255, 117, 117);}
  </style>
  <link rel="stylesheet" href="style.css">
  <title>COMPASS</title>
</head>
<body>
  <header>
    <nav>
      <div class="logo"> <h1 class="">CoMpAsS</h1></div>
      <div class="menu">
        <a href="#">Home</a>
        <a href="#about us">About</a>
        <a href="contact.php">Contact_Us</a>
      </div>
    </nav>
      <main>
        <section>
          <h3>WELCOME</h3>
          <h1>THE SIMPLEST WAY TO FIND PROPERTY <span> </span></h1>
          <p>Book Your Dream Property Now...</p>
          <div class="dropdown">
            <button class="dropbtn">Register</button>
            <div class="dropdown-content">
              <a href="register.php">User</a>
              <a href="adminreg.php">Admin</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn1">Sign in</button>
            <div class="dropdown-content">
              <a href="login.php">User</a>
              <a href="adminlogin.php">Admin</a>
            </div>
          </div>
        </section>
      </main>
      <div class="about-section">
        <div id="about us">
       <h1>About Us </h1>
       <p>The smart city mission project is locally owned and uniquely suited to oversee your residential property management needs in suburbs.</p>
       <p>it is a kind of property management system which not not keeps the records os the properties available, but also keeps the track of .</p>
       <p>all the smart city plans available for that property. so you can look into them and buy a desired property of your choice</p>
    </div>
    </div>
  </header>
  
</body>
</html>