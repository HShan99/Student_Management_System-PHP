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
$id = $_GET['student_id'];
$sql = "SELECT * FROM user WHERE id = '$id' ";
$result = mysqli_query($data,$sql);
$info=$result->fetch_assoc(); 

if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    $query = "UPDATE user SET user_name='$name', email='$email',phone='$phone',password='$password' WHERE id='$id' ";
    $result2 = mysqli_query($data,$query);

    if($result2){
        header("location:viewStudent.php");
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <?php include 'admin_css.php'; ?>

</head>

<body>
    <?php
        include 'admin_sidebar.php';
    ?>

    <center style="font-size:30px; font-weight:bold; padding-bottom:20px; padding-top:40px;padding-left:150px">Edit
        Student
    </center>




    <div align="center" class="form_details" style="padding-top: 20px; padding-left:200px;">
        <form action="" method="post">
            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control custom-input-width" name="name" placeholder=" User Name"
                        value="<?php echo "{$info['user_name']}" ?>">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="email" class="form-control custom-input-width" name="email" placeholder="Email"
                        value="<?php echo "{$info['email']}" ?>">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control custom-input-width" name="phone" placeholder="Phone"
                        value="<?php echo "{$info['phone']}" ?>">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control custom-input-width" name="password" placeholder="Password"
                        value="<?php echo "{$info['password']}" ?>">
                </div>
            </div>


    </div>
    <button type="submit" class="btn btn-success" style="margin-top: 15px; margin-left:540px; width:100px;"
        name="edit">Edit</button>

    </div>
    </form>

    <div>


    </div>
</body>

</html>