<?php require_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Connect</title>
</head>
<body>
<header>
    <nav>
    <ul>
    <li><a href="profile.php" style="text-decoration:none;">Profile</a></li>
     <?php 
        checkLoggedIn();
        
     ?>
    
    </ul>
    </nav>
</header>

<h2>Register form</h2>
<form action="register.php" method="POST">
<div>
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Naam">
</div>
<div>
    <label for="email">E-mail</label>
    <input type="text" name="email" placeholder="E-mail">
</div>
<div>
    <label for="password">Password</label>
    <input type="text" name="password" placeholder="Password">
</div>
<input type="submit" name="submit" value="Register">
</form>
<hr>
<h2>Login form</h2>
<form action="login.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <input type="submit" name="submit" value="Login">
    </form>
<hr>

</body>
</html>
