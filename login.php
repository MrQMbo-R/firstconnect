<?php

require_once("session_manager.php");
require_once("dbconnect.php");

if(isset($_POST["submit"]))
{
    try{
    $check=checkUser($_POST["email"]);
    if($check==true){
   
     loginUser($check); 
        
      if(isAdmin()){
         header('location:profile.php');
         
      }
        else{
           header("location:nProfile.php"); 
        }      
          }      
    }
    catch(PDOException $e){echo 'Exception because '.$e;} 
       
}
else{
        header("location:index.php");
    }


?>