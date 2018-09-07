<?php
    session_start();
    session_destroy();
    include 'header.php';
    

?>

<?php
include 'dbh.php';

echo 'Press logout button to logout';
?>
        
         <form action="signup.php" >
            <button>LOG OUT</button>           
        </form>







