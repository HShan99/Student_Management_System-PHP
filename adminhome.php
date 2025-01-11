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
    <link rel="stylesheet" href="admin.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header class="header">
        <a href="" class="links">Admin Dashboard</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
            <li><a href="" class="links">Admission</a></li>
            <li><a href="" class="links">Add Student</a></li>
            <li><a href="" class="links">View Student</a></li>
            <li><a href="" class="links">Add Teacher</a></li>
            <li><a href="" class="links">View Teacher</a></li>
            <li><a href="" class="links">Add Course</a></li>
            <li><a href="" class="links">View Corse</a></li>
        </ul>
    </aside>

    <div class="content">
        <h2>Sidebar According</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non atque accusamus repellat quo deleniti sit
            distinctio facere cum doloremque, unde delectus maxime natus. Qui quae at hic impedit error! Ab!</p>
    </div>
</body>

</html>