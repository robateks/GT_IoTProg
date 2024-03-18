<?php
$str="hello from php<br><br>"; //we declared a variable called $str. the type is automatically detected from the value
echo $str;

$usernames=array("john.doe","jane.doe");
$passwords=array("pass","pass");
if (Login()){
    header("location:../fe/pages/homeIoT.html");
}else{
    header("location:../index.php?errorCode=1");
}


function IsMissingArgs(){
    if (!isset($_POST["tfun"])){  
        return true;
    }    
    if (!isset($_POST["tfpass"])){
        return true;
    }
    return false;
}

function Login(){
    global $passwords;
    global $usernames;
    if (isset($_POST["tfun"])){
        $un=$_POST["tfun"];    
        echo "username: ".$un."<br>";
    }else{
        echo "username is missing!<br>";
        return false;    
    }
    
    
    if (isset($_POST["tfpass"])){
        $pass=$_POST["tfpass"];
        echo "password: ".$pass."<br>";
    }else{
        echo "password is missing!<br>";
        return false;
    }

    for ($i=0;$i<sizeof($usernames);$i++){
        if (($un==$usernames[$i])&&($pass==$passwords[$i])){
            return true;
        }
    }

    return false;
}
    
?>