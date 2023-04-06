<?php

function MakeConnection(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="netfishdb";

try{
    $pdo = new PDO("mysql:host=" . $servername .";dbname=" . $database, $username, $password);

     $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e)
{
    die("ERROR: Could not connect" .$e->getMessage());

}
return $pdo;
}

function selectAll()
{
    $con=MakeConnection();
    $query="SELECT * FROM users";
    $stmt =$con->prepare($query);
    try{
        
        $stmt->execute();        
        $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
        
    }catch(PDOException $e){echo 'Exception because '.$e;}
    
}

function delete($id)
{
    $con=MakeConnection();
    $query="DELETE FROM users WHERE id=$id ";
    $stmt=$con->prepare($query);    
    $stmt->execute(array());

}

function insertUser($username,$email,$password)
{
   $con=MakeConnection();
    $query="INSERT INTO users(username,email,password) VALUES (:username,:email,:password)";
    $stmt =$con->prepare($query);
    try{
        $stmt->execute(array(':username'=>$username,':email'=>$email,':password'=>$password));
    }
    catch(PDOException $e){echo 'Exception because '.$e;} 
      
      
}

function upload_image_to_database($image_data,$image_name)
{
    $con =MakeConnection();
    $query="INSERT INTO movie(title,image) VALUES(?,?)";
    $stmnt = $con->prepare($query);
    $stmnt->bindParam(1,$image_name);
    $stmnt->bindParam(2,$image_data, PDO::PARAM_LOB);
    $stmnt->execute();
    
}

function getImage(){
    $con = MakeConnection();
    $query = "SELECT * FROM movie";
    $stmt =$con->prepare($query);
    $stmt->execute();
    $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $result;
    
}


function uploadVideo($title,$url,$year,$description,$image)
{
    $con= MakeConnection();
    $query="INSERT INTO movie(title,url,year,description,image) VALUES (:title,:url,:year,:description,:image)";
    $stmt =$con->prepare($query);
    try{
        $stmt->execute(array(':title'=>$title,':url'=>$url,':year'=>$year,':description'=>$description,':image'=>$image));
    }
    catch(PDOException $e){echo 'Exception because '.$e;} 
    
}
function checkUser($email)
{
   $con = MakeConnection();   
   
    $query="SELECT * FROM users WHERE email=:email";
    $stmt = $con->prepare($query);
    try{
      $stmt->execute(array(':email'=>$email));
      $result =$stmt->fetch(PDO::FETCH_ASSOC);
         
       return $result;
    }catch(PDOException $e){echo 'Exception because '.$e;}
      
     
    
}






?>