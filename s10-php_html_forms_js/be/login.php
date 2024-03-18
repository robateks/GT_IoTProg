<?php
$usernames=array("john.doe","jane.doe");
$passwords=array("pass","pass");

if (IsMissingArgs()){
    header("location:../index.php?errorCode=2&errorDesc=missing args");    //error_code 2 is for missing args
}else{
    if (Login($_POST["tfun"],$_POST["tfpass"])){
        header("location:../fe/pages/homeIoT.html");
    }else{
        header("location:../index.php?errorCode=1&errorDesc=wrong username or pass");    //error_code 1 is for wrong username or pass
    }
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

function Login($un,$pass){
    global $passwords;
    global $usernames;    
    for ($i=0;$i<sizeof($usernames);$i++){
        if (($un==$usernames[$i])&&($pass==$passwords[$i])){
            return true;
        }
    }
    return false;    
}   
?>