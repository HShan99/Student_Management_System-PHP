<?php
    session_start();
    error_reporting(0);
    
    if(!isset($_SESSION['userName'])){
        header("location:login.php");
    }
    elseif($_SESSION['user_type']=='student'){
        header("location:login.php");
    }
    
$host="localhost";
$user = "root";
$password = "";
$db = "w-school";

$data=mysqli_connect($host, $user, $password, $db);
$sql= "SELECT * FROM user WHERE user_type='student'";

$result = mysqli_query($data,$sql);


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
        <center style="font-size:30px; font-weight:bold; padding-bottom:40px;">Registered Students</center>

        <center style="padding-bottom: 10px;">
            <?php
            if($_SESSION['message']){
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
        ?>
        </center>

        <center>
            <table class="table" id="tableStyle">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>

                    <?php 
                    while($info=$result->fetch_assoc()){
                ?>
                    <tr>
                        <th scope="row">
                            <?php echo "{$info['user_name']}"?>
                        </th>
                        <td><?php echo "{$info['email']}"?></td>
                        <td><?php echo "{$info['phone']}"?></td>
                        <td><?php echo "<a class='btn btn-danger' href='deleteStudent.php?student_id={$info['id']}' 
                        onClick=\" javascript:return confirm('Are you sure to delete that student ?');\">Delete</a>"?>
                        </td>

                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </center>

    </div>









</body>

</html>