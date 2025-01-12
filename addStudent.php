<?php
    session_start();
    
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
// $sql = "INSERT INTO ";

if(isset($_POST['add_student'])){
    $userName = $_POST['name'];
    $userPhone = $_POST['phone'];
    $userEmail = $_POST['email'];
    $userType = "student";
    $userPassword = $_POST['password'];

    $check = "SELECT * FROM user WHERE user_name='$userName'";
    $check_user = mysqli_query($data,$check);
    $row_count = mysqli_num_rows($check_user);
    
    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('User already exist.Try another user name');
        </script>";
    }
    else{
        $sql = "INSERT INTO user (user_name,phone,email,user_type,password)
        VALUES('$userName','$userPhone','$userEmail','$userType','$userPassword')";

        $result = mysqli_query($data,$sql);
        
        if($result){
            echo "<script type='text/javascript'>
                alert('Data upload successful');
            </script>";
        }
        else{
            echo "<script type='text/javascript'>
                alert('Data upload failed');
            </script>";
        }
        }

    }
    
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <?php include 'admin_css.php'; ?>

</head>

<body>
    <?php
        include 'admin_sidebar.php';
    ?>

    <center style="font-size:30px; font-weight:bold; padding-bottom:20px; padding-top:40px;padding-left:150px">Add
        Student
    </center>




    <div align="center" class="form_details" style="padding-top: 20px; padding-left:200px;">
        <form action="" method="post">
            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control custom-input-width" name="name" placeholder=" User Name">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="email" class="form-control custom-input-width" name="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control custom-input-width" name="phone" placeholder="Phone">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control custom-input-width" name="password" placeholder="Password">
                </div>
            </div>


    </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-left:540px; width:150px;"
        name="add_student">Add Student</button>

    </div>
    </form>

    <div>


    </div>
</body>

</html>