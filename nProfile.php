<?php 
 require_once("functions.php"); ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Normal Profile</title>
</head>
<body>
     <header>
      <nav>
         <ul>
          <li><a href="index.php">Home</a></li>
          <?php  
            echo" Hello ".$_SESSION['name'];
            echo '<li><a href="logout.php">Log out</a></li>';      
            
           ?>
      </ul>
      </nav>
  </header>
</body>
</html>