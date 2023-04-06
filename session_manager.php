<?php
session_start();

function loginUser($data)
{
  
    $_SESSION['name']=$data['username'];
    $_SESSION['email']=$data['email'];
    $_SESSION['id']=$data['id'];
    $_SESSION['isAdmin']=$data['isAdmin'];
    
}


function logout()
{
    session_unset();
    session_destroy();
}

function isUserLoggedIn()
{
    return isset($_SESSION['name']);
}
function isAdmin()
{
    return $_SESSION['isAdmin'];
}


?>