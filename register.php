<?php
require_once("dbconnect.php");

if(isset($_POST["submit"]))
{
    $check =checkUser($_POST["email"]);
    if(!$check==true)
    {
    try{
    insertUser($_POST["name"],$_POST["email"],$_POST["password"]);
    
    header("location:index.php");
    }
    catch(PDOException $e){echo 'Exception because '.$e;} 
    
    }
    else
    {
        
      echo 'Email already in use';
    }
    
}








?>