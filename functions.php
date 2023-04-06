<?php
require_once "dbconnect.php";
require_once "session_manager.php";



  function showMovies()
 {
          $movies = getImage();
           
          foreach($movies as $movie)
          {
              echo '<td>'.$movie['title'].'</td>
              <td>'.$movie['description'].'</td>';
          }
          
 }

function showTable()
      {
          
           $names=selectAll();  
     
     foreach($names as $item)
      {
    
       echo'<td>'.$item["username"].'</td>
       <td>'.$item["email"].'</td>';
         
         //De id van de row die verwijdered moet worden wordt hier
         // via een $_GET meegegeven ?delete='.item['id']'
      	echo '<td><a href=?delete='.$item['id'].'>Delete</a></td>';
       
       echo '</tr>';       
                
      }
          
      }

function checkLoggedIn(){
    
     if($_SESSION)
        {
         echo" Hello ".$_SESSION['name'];
         echo '<li><a href="logout.php">Log out</a></li>';   
            
        }
}

function checkAccess()
{
    if(!$_SESSION)
{
   
         header('location:index.php');           
       
}
elseif(!$_SESSION['isAdmin'])
{
    header('location:nProfile.php'); 
}
}

?>