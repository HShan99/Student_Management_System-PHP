<?php
    session_start();
    
    if(!isset($_SESSION['userName'])){
        header("location:login.php");
    }
    elseif($_SESSION['user_type']=='student'){
        header("location:login.php");
    }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php include 'admin_css.php'; ?>

</head>

<body>
    <?php
        include 'admin_sidebar.php';
    ?>

    <div class="content">
        <h2>Sidebar According</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non atque accusamus repellat quo deleniti sit
            distinctio facere cum doloremque, unde delectus maxime natus. Qui quae at hic impedit error! Ab!</p>
    </div>
</body>

</html>