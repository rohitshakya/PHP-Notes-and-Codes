Live Demo
<?php
   ob_start();
   session_start();
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang = "en">
   <head>
      <title>Home</title>
   </head>
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
         
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {	
               if ($_POST['username'] == 'rohit' && 
                  $_POST['password'] == 'shakya') 
               {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'rohit';
                     echo "Welcome!!";
                     echo $_SESSION['username'];   
                  
               }
               else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "rohit" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "shakya" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
   </body>
</html>