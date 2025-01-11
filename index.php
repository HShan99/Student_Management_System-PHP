<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']){
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
        alert('$message');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Management System</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <nav>
        <label class="logo">W-School</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-primary">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">The Student Management</label>
        <img class="main_image" src="images/backgound.jpg" alt="image">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="ground_image" src="images/ground.jpg" alt="image">
            </div>
            <div class="col-md-8">
                <h1>Welcome to W-School</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, molestias deleniti voluptatem
                    molestiae suscipit vitae similique officia debitis. Consequuntur eligendi, esse nulla dolor fuga
                    impedit unde veritatis magni in quam!Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Mollitia, molestias deleniti voluptatem
                    molestiae suscipit vitae similique officia debitis. Consequuntur eligendi, esse nulla dolor fuga
                    impedit unde veritatis magni in quam!Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Mollitia, molestias deleniti voluptatem
                    molestiae suscipit vitae similique officia debitis. Consequuntur eligendi, esse nulla dolor fuga
                    impedit unde veritatis magni in quam!</p>
            </div>
        </div>
    </div>

    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="images/teacher1.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet perspiciatis optio deserunt autem
                    beatae nostrum!</p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/teacher2.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aliquam hic non cupiditate
                    corrupti.</p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="images/teacher3.png" alt="image">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus
                    sint,
                    consequuntur, esse commodi fuga</p>
            </div>
        </div>

    </div>


    <center>
        <h1>Our Courses</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="course" src="images/digital_marketing.png" alt="image">
                <p class="course_description">Digital Marketing</p>
            </div>
            <div class="col-md-4">
                <img class="course" src="images/graphic_design.png" alt="image">
                <p class="course_description">Graphic Design</p>
            </div>
            <div class="col-md-4">
                <img class="course" src="images/web_development.png" alt="image">
                <p class="course_description">Web Development</p>
            </div>
        </div>

    </div>

    <center>
        <h1>Admission Form</h1>
    </center>

    <div align="center" class="form_details" style="padding-top: 20px;">
        <form action="data_check.php" method="post">
            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control custom-input-width" name="name" placeholder=" Name">
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
                <label class="col-lg-3 col-form-label"></label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" placeholder="Message"
                        rows="3">
                </textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-left:600px; width:150px;"
                name="apply">Apply</button>

    </div>
    </form>

    <div>
        <footer class="footer">
            <h3 class="footer_text">All @copyright reserved by W-School</h3>
        </footer>
    </div>









</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>