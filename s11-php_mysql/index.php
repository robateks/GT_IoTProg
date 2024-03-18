<?php
    if (isset($_GET["errorCode"])){
       echo "<script>alert('".$_GET['errorDesc']."')</script>"; 
    }    
?>
<html lang="en">
<head>
    <meta http-equiv="content-language" content="en-us">
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        web of Things
    </title>
    <link rel="stylesheet" href="fe/css/mystyles.css">

</head>

<body>
    <h1 id="page-title">
        Welcome to IoT Prog
    </h1>
    <div style="text-align: center;">
        <form id="login-frm" name="loginFrm" action="be/login.php" method="POST" style="text-align: left; display:inline-block;">
            <label>Username:</label><br>
            <input id="tfun" type="text" name="tfun" autocomplete="off"><br>
            <label>Password:</label><br>
            <input id="tfpass" type="password" name="tfpass" autocomplete="off">
            <br><br>
            <input type="button" value="Submit" onclick="LoginSubmit()">
            <input type="button" value="Cancel" onclick="ClearLogin()">
        </form>
    </div>

    <script>
        function LoginSubmit(){
            let un=document.getElementById("tfun").value;
            let pass=document.getElementById("tfpass").value;
            console.log("username: "+un);
            console.log("pass: "+pass);
            if ((un=="")||(pass==""))
                alert("please fill in the username and password!");
            else
                document.getElementById("login-frm").submit();
        }
        function ClearLogin(){
            document.getElementById("tfun").value="";
            document.getElementById("tfpass").value="";
        }

        
    </script>
</body>

</html>