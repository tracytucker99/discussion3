<?php
    session_start();
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tracy's Login Club</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <header>
            <nav> 
                <ul>
                    <li><a href="signup.php">Home</a></li> 
                    <?php  
                      
            if (isset($_SESSION['id'])) { 
                echo "<form action='index.php'>
                      <button>LOG OUT</button>           
                      </form>";
            } else {
                echo "<br><form action='login.inc.php' method='POST'>
            <input type='text' name='uid' placeholder='Username'>
            <input type='password' name='pwd' placeholder='Password'>
            <button type ='submit'>Sign-IN</button><br>
        </form>"; 
            }  

                    ?>
                    <li><a href="signup.php">Sign IN</a></li>                
                </ul>              
            </nav>           
        </header>
        

