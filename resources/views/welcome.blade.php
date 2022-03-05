<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

  <style type="text/css">
      #text {color:transparent;}
        h1{
            color: white;
        }
       
        /* label{
            color: white;
  
  font-weight: bold;
            
            text-transform: uppercase;
            font-size:18px;
            width: 24%;
            display: inline-block;
        } */
          input[type=submit]{
              color:white;

           font-size: 30px;
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
            width: 20px%;
            border-color:black ;
  background: grey;
            
           
        }  
        input[type=text], input[type=password] {
            color: white;

        
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
            width: 20px%;
            border-color: white;
  background: transparent;
        }
        
        /* div{
text-align: center;
        }
        select{
            text-align: center;
        } */
      
         body{
              /* background-image: url('https://cdn.pixabay.com/photo/2018/09/25/09/17/sale-3701777_960_720.jpg'); */
              background-image: url('https://cdn.pixabay.com/photo/2017/06/03/10/06/house-2368389_960_720.jpg');  
            background-repeat: no-repeat;
            background-size: 100%;
           
            
        }  */
         div {
  
  /* background-color: red;
  animation-name: example;
  animation-duration: 10s;
  animation-delay: 2s;
  animation-iteration-count: infinite;
}

@keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: aqua;}
  100% {background-color: green;} */

} */
/* .btn {
  
  
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
} */

  /* input[type=text], input[type=password]  , input[type=submit] {
  width: 40px;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
} */
  /* div{
  background-image: url("../images/teacher.jpg");
  background-size: cover;
  }  */
/* select{
  width: 31.5%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1; 
} */




        
    </style>


    

    <script>
        
function validate()
{
    var admin=document.getElementById("admin").value;
    var pass=document.getElementById("pass").value;
    if (admin=="admin" && pass=="teacher123")
    {
        alert("login successfully");
        window.location = "members";
    }
    else if(admin=="" && pass=="")
    {
        alert("please enter username and password");
        
        
    }
    else if(admin=="admin" && pass=="")
    {
        alert("please also enter password to login");
        
    }
    else if(admin=="" && pass=="teacher123")
    {
        alert("please also enter username to login");
        
    }
   
    else
    {
        alert("please enter correct username or password");
    }
}
function showPassword() {
    if(document.getElementById("pass").type == 'password')
        document.getElementById("pass").type = 'text';
    else
        document.getElementById("pass").type = 'password';

}

    </script>
</head>
<body>
    <center><h1>ADMIN</h1></center>
    <form action="" method="get" >
        <center>
        <table>        
            <div> 
                <tr>
                <td>username</td>
           <!-- <label for="admin">admin_username</label><br><br> -->
           <td><input type="text" name="admin" id="admin"></td>
           </tr>
        </div>
        <div>
            <tr>
            <!-- <br><label for="pass">password</label><br><br> -->
            <td>password</td>
            <td><input type="password" name="pass" id="pass"></td>
            <td><img src="eye.png" style="width: auto;height: 22px;" onclick="showPassword();" /></td>

            </tr>
        <div>
            <tr>
            <!-- <td></td> -->
            <td colspan='2'><p id="text">WARNING! Caps lock is ON.</p></td>
            </tr>
            <tr>
            <td><input type="button" value="login" onclick="validate()"></td>
            </tr>
        </div>
        </table>
        </center>
    </form>
    <script>
        var input = document.getElementById("pass");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.color = "black";
  } else {
    text.style.color = "transparent";
  }
});
    </script>
</body>
</html>