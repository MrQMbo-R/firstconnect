<?php 
 require_once "functions.php";
checkAccess();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
 
  <header>
      <nav><ul>
          <li><a href="index.php">Home</a></li>
          <?php          
        
      checkLoggedIn();        
        
     ?>
      </ul>
      </nav>
  </header>
  <table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Delete</th>
    
  </tr>
  <tr>
   <?php

     
      //Hier word er gekeken als '$_Get[delete]' is aangemaakt
      // Als dat true is voert hij de functie delete uit met de waarde van $_GET[delete]
     if(isset($_GET['delete']))
      {
         //functie delete wordt hier opgeroepen
         delete($_GET['delete']);
          showTable();
      }
      else{
       showTable();
       
    }      
      
    
      
    

?>
   
  </tr>
  
</table>
<hr>
<table>
  <tr>
    <th>hu</th>
    <th>Email</th>
    <th>Delete</th>   
  </tr>
  <tr>
    <?php
      
      showMovies();
      
      
       
      ?>  
  </tr>
   
  </table>
<hr>
<form action="upload.php" method="POST" enctype="multipart/form-data" >
    <div>
        <label for="image">Image</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="url">Url</label>
        <input type="text" name="url">
    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="year">Released date</label>
        <input type="date" name="year">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description">
    </div>
    <input type="submit" name="submit" value="upload">
    
    
    
    
    
</form>
 
</body>
</html>
 