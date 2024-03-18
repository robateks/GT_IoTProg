<?php
function ConnectToDB(){
    try{
        $db=new PDO("mysql:host=127.0.0.1;dbname=db_iotprog","root","root");
    }catch(Exception $ex){
        echo $ex->getMessage();
        die();
        $db=null;
    }
    return $db;
}

if (IsMissingArgs()){
    header("location:../index.php?errorCode=2&errorDesc=missing args");    //error_code 2 is for missing args
}else{
    $user=Login($_POST["tfun"],$_POST["tfpass"]);
    if ($user==false){
        header("location:../index.php?errorCode=1&errorDesc=wrong username or pass");    //error_code 1 is for wrong username or pass
    }else{
        header("location:../fe/pages/homeIoT.php?name=".$user->FIRST_NAME." ".$user->LAST_NAME); 
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
    
    $query="SELECT ID,FIRST_NAME,LAST_NAME FROM tbl_users where USERNAME='$un' and PASSWORD='$pass'";
    $db=ConnectToDB();
    $stmt=$db->query($query);
    $db=null;    
    if  ($stmt->rowCount()>0){
        $obj = $stmt->fetch(PDO::FETCH_OBJ);
        return $obj;
    }else
    {
        return false;
    }     
   }   
?>