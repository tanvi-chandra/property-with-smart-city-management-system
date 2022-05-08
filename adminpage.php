<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins',sans-serif;
        }
        ::selection{
          color: #000;
          background: #fff;
        }
        nav{
          position: fixed;
          background: #1b1b1b;
          width: 100%;
          padding: 10px 0;
          z-index: 12;
        }
        nav .menu{
          max-width: 1250px;
          margin: auto;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 0 20px;
        }
        .menu .logo a{
          text-decoration: none;
          color: #fff;
          font-size: 35px;
          font-weight: 600;
        }

        .img{
          background: url('admin (2).jpg')no-repeat;
          width: 100%;
          height: 100vh;
          background-size: cover;
          background-position: center;
          position: relative;
        }
        .img::before{
          content: '';
          position: absolute;
          height: 100%;
          width: 100%;
          background: rgba(0, 0, 0, 0.4);
        }
        .center{
          position: absolute;
          top: 52%;
          left: 50%;
          transform: translate(-50%, -50%);
          width: 100%;
          padding: 0 20px;
          text-align: center;
        }
        .center .title{
          color: #fff;
          font-size: 55px;
          font-weight: 600;
        }
        .center .sub_title{
          color: #fff;
          font-size: 52px;
          font-weight: 600;
        }
        .center .btns{
          margin-top: 20px;
        }
        .center .btns button{
          height: 80px;
          width: 170px;
          border-radius: 50px;
          border: none;
          margin: 0 10px;
          border: 2px solid white;
          font-size: 20px;
          font-weight: 500;
          padding: 0 10px;
          font-family: cursive;
          cursor: pointer;
          outline: none;
          transition: all 0.3s ease;
        }
        .center .btns button:first-child{
          color:white;
          background: none;
        }
        .btns button:first-child:hover{
          color: black;
          background-color: white;
        }
        .center .btns button:last-child{
          background:transparent;
          color:white;
        }
        .btns button:last-child:hover{
          color: black;
          background-color: white;
        }
    </style>
    <script>
      function logout(){
        alert('Are you sure you want to logout?');
      }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CoMpAsS</a>
      </div>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="btns">
      <button><a href="Propdisplay.php"> Manage Property</a></button>
      <button><a href="smartcitydisplay.php">Manage SmartCity</a></button>
      <button><a href="Alogout.php" onclick="logout()">Log Out</a></button>
    </div>
  </div>
</body>
</html>
