<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>



    <div align="center" class="form_details" style="padding-top: 70px; padding-left: 400px;">
        <center id="login" style="font-size:40px; padding-right:380px; padding-bottom:50px; font-weight:bold">Login Form
        </center>
        <form action="login_check.php" method="POST">

            <div class="form-group row" style="padding-top: 15px;">
                <label class="col-lg-3 col-form-label">User Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control custom-input-width" placeholder=" User Name">
                </div>
            </div>

            <div class="form-group row" style="padding-top: 15px;">
                <label class=" col-lg-3 col-form-label">Password</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control custom-input-width" placeholder="Password">
                </div>
            </div>


            <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-left:-120px; width:100px;">Log
                In</button>
    </div>
    </form>

    <div>

</body>

</html>