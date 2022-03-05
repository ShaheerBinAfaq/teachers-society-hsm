<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

<style>
#text {display:none;color:red}
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
            <td><p id="text">WARNING! Caps lock is ON.</p></td>
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
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
    </script>
</body>
</html>