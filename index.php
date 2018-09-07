<?php
    session_start();
    include 'header.php';
    
    ?>

        
        <?php
            if (isset($_SESSION['id'])) { 
                echo $_SESSION['id'];
            } else {
                echo "You have not been logged in, this is index.php page";
            }  
        ?>  
        <br><br><br>    
    </body>
</html>
