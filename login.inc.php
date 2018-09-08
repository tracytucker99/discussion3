<?php
    session_start();
?>

<?php

include 'dbh.php';
include 'header.php';




$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "Select * from user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if(!$row == $result->fetch_assoc()){
    echo "Your username or password is incorrect!"."<br>"."<Press button to retry>"."<br>"."<form action='index.php' >
            <button>RETRY</button>           
        </form>";
} else { 
echo $_SESSION[] = " #".$row['id']."<br>"."Hello ".$row['first']."\n".$row['last'].",". " Welcome!! How are you today?"."<br><br>".
            "You are logged in"."<br><br>"."Are you sure you want to logout?"."<br><br>".
        "<form action='logout.inc.php'>
            <button>LOG OUT</button>          
        </form>";
}









