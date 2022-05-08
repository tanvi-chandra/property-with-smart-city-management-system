
<?php
  include("connection.php");
  session_start();
  $cid=$_SESSION['CustId'];
  $prid=$_GET['propid'];
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <title>Booking form</title>
     <style>
       *{
          margin: 0;
          padding: 0;
        }
        body{
          background: linear-gradient(lightblue,skyblue);
        }

        h4{
          font-family:'Times New Roman', Times, serif;
          font-size: 30px;
          align-items: center;
        }
        form {  

            width: 30%;  
            margin: 60px auto;  
            background: rgb(240, 220, 222);  
            padding: 60px 120px 80px 120px;  
            text-align: center;  
            box-shadow: 2px 2px 3px rgba(0,0,0,0.1); 
            box-shadow: 2px 2px 3px rgba(0,0,0,0.1); 
          }
        label {  
            display: block;  
            position: relative;  
            margin: 40px 0px; 
          }
            .label-txt {  
              position: absolute;  
              top: -1.6em;  
              padding: 10px;  
              font-family: sans-serif;  
              font-size: .8em;  
              letter-spacing: 1px;  
              color: rgb(120,120,120);  
              transition: ease .3s; 
            }
            .input {  
              width: 100%;  
              padding: 10px;  
              background: transparent;  
              border: none;  
              outline: none; 
            }
            .line-box {  
                position: relative;  
                width: 100%;  
                height: 2px;  
                background:grey; 
              }
              .line {  
                  position: absolute;  
                  width: 0%;  
                  height: 2px;  
                  top: 0px;  
                  left: 50%;  
                  transform: translateX(-50%);  
                  background:red;  
                  transition: ease .6s; 
                }  
                .input:focus + .line-box .line {  
                  width: 100%; 
                }
                .label-active {  
                  top: -3em; 
                }
                button {  
                    width: 100px;
                    display: inline-block; 
                    padding: 12px 24px;  
                    background-color:cornflowerblue;  
                    font-weight: bold;  
                    color: white;  
                    border: none;  outline: none;  
                    border-radius: 3px;  
                    cursor: pointer;  
                    transition: ease .3s; 
                  }  
                  button:hover {  
                    background:blue;  
                    color: #ffffff; 
                  }
                  select{
                    display: inline;
                    height: 30px;
                    width: 150px;
                    outline: none;
                    color: black;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-shadow: 1px 1px 2px #999;
                    border: #eee;
                  }
     </style>
     <link rel="stylesheet" href="">
 </head>
 <body>
    <body> 
            <div>
                <form action="connectBook.php"  method="post">    
                    <h4>BOOKING</h4>
                    <label>     
                      <input type="text" class="input" name="propid" placeholder="Enter property Id" autocomplete="off" value=<?php echo $prid;?> readonly>                   
                      <div class="line-box">          
                      <div class="line"></div>        
                      </div>    
                    </label>  
                    <label>     
                      <input type="text" class="input" name="custid" placeholder="Enter Customer Id" autocomplete="OFF" value=<?php echo $cid;?> readonly/>                   
                      <div class="line-box">          
                      <div class="line"></div>        
                      </div>    
                    </label>    
                    <label>     
                      <input type="text" class="input" name="Name" placeholder="Enter Full name" autocomplete="off" required/>                   
                      <div class="line-box">          
                      <div class="line"></div>        
                      </div>    
                    </label>      
                    <input type="email" class="input" name="email" placeholder="Enter valid EMAIL*" autocomplete="OFF" required />                   
                        <div class="line-box">          
                        <div class="line"></div>        
                        </div>
 
                    <label>
                      <input type="date" class="input" name="bdate" placeholder="Booking date" max="2005-01-01" autocomplete="OFF" required/>                   
                      <div class="line-box">          
                        <div class="line"></div>        
                      </div>    
                    </label> 
                    <label>  
                      <input type="number" class="input" pattern="[0-9]{10}" name="number" placeholder=" Enter valid mobile number*" autocomplete="off" required="">
                      <div class="line-box">          
                        <div class="line"></div>        
                      </div>    
                    </label>
                    <label>
                      <input type="text" class="input" name="address" placeholder="Location(city)" required="">
                     
                      <div class="line-box">          
                        <div class="line"></div>        
                      </div>    
                    </label>
                      <button type="submit" class="btn submits re" name="submit" id="done"> Book</button>
                                   
           </form>
        </div>
      
 </body>
</html>
