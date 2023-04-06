<?php
require_once("dbconnect.php");

if(isset($_POST["submit"]))
{ 
    try{
   $uploaded_file =$_FILES['image']['tmp_name'];
    $temp_path = 'uploads/'.basename($_FILES['image']['name']);
    move_uploaded_file($uploaded_file,$temp_path);
    $image_data=file_get_contents($temp_path);
    upload_image_to_database($image_data,$_POST['title']);
    }
    catch(PDOException $e){echo 'Exception because '.$e;}
}






?>