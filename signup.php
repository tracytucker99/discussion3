<?php
    include 'header.php';
    session_start();
    ?>
        
        <?php
            if (isset($_SESSION['id'])) { 
                echo $_SESSION['id'];
            //} else {
            //    echo "You have not been logged in, please re-enter.";
            }  
        ?>  
        <br><br>
        <form action="login.inc.php" method="POST">
            <input type="text" name="first" placeholder="Firstname"><br>
            <input type="text" name="last" placeholder="Lastname"><br>
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br><br>
            <button type = submit>Register</button>        
        </form>   
    </body>
</html>


