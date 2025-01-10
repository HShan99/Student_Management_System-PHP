<?php
session_start();
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "w-school";

$data = mysqli_connect($host, $user, $password, $db);

if($data == false){
    die("Connection Error");
}
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['userName'];
        $pass = $_POST['password'];

        $sql="select * from user where user_name='".$name."' AND password='".$pass."' ";
        $result=mysqli_query($data,$sql);
        $row=mysqli_fetch_array($result);

        if($row["user_type"] == "student"){
            $_SESSION['userName'] = $name;
            $_SESSION['user_type'] = "student";
            header("location:studenthome.php");
        }

        elseif($row["user_type"] == "admin"){
            $_SESSION['userName'] = $name;
            $_SESSION['user_type'] = "admin";
            header("location:adminhome.php");
        }
        else{
            
           $message = "User name or password do not match";
           $_SESSION['loginMessage']=$message;
           header("location:login.php");
        }


        
    }
?>