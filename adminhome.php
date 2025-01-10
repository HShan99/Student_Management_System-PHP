<?php
    session_start();
    
    if(!isset($_SESSION['userName'])){
        header("location:login.php");
    }
    elseif($_SESSION['user_type']=='student'){
        header("location:login.php");
    }
    

?>
<h2>admin</h2>

<a href="logout.php">Logout</a>