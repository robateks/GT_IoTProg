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
    // header("location:../index.php?errorCode=2&errorDesc=missing args");    //error_code 2 is for missing args
}else{
    
    if ($Signup()){
        
    }else{
        
    }
}

function IsMissingArgs(){
    if (!isset($_POST["tfun"])){  
        return true;
    }    
    if (!isset($_POST["tfpass"])){
        return true;
    }
    //...
    return false;
}

function Signup($un,$fn,$ln,$pass,$email){
    
    $query="INSERT INTO tbl_users (USERNAME,FIRST_NAME,...) values ($us,$fn,...)";
    $db=ConnectToDB();
    $stmt=$db->query($query);
    $db=null;    
    if  ($stmt->rowCount()>0){        
        return true;
    }else
    {
        return false;
    }     
   }   
?>