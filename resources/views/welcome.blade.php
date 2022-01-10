<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
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
    </script>
</head>
<body>
    <center><h1>ADMIN</h1></center>
    <form action="admin.html" method="get" >
        <center>
        <table>        
            <div> 
                <tr>
                <td>username</td>
           <!-- <label for="admin">admin_username</label><br><br> -->
           <td><input type="email" name="admin" id="admin"></td>
           </tr>
        </div>
        <div>
            <tr>
            <!-- <br><label for="pass">password</label><br><br> -->
            <td>password</td>
            <td><input type="password" name="pass" id="pass"></td>
            </tr>
        <div>
            <tr>
            <td><input type="submit" value="login" onclick="validate()"></td>
            </tr>
        </div>
        </table>
        </center>
    </form>
    
</body>
</html>