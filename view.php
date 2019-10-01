<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="node_modules\jquery\dist\jquery.js"></script>
    <script src='./ajax.js'></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SignUp</title>
</head>
<body class="container">
    <h1>Registration</h1>
    <?php include('errors.php');?>
    <form action="view.php" method="POST">
    <!-- <form > -->
        <!-- <div class='input-group'> -->
        <!-- <label for="email">Email</label> -->
        <!-- <input type="email" required name="email" value=<?= $email ?>> -->
        <!-- </div> -->
        <!-- <div class='input-group'> -->
        <!-- <label for="password">Password</label> -->
        <!-- <input type="password" required name="password_1"> -->
        <!-- </div> -->
        <div class="input-group mb-3">
            <input type="email" class="form-control" id='email' required placeholder="Username" name="email" aria-describedby="basic-addon2"  value=<?= $email ?>>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">Password</span>
            </div>
            <input type="password" class="form-control" required id='password_1' placeholder="" name="password_1" aria-describedby="basic-addon2"  >
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">Confirm Password</span>
            </div>
            <input type="password" class="form-control" required placeholder="" id='password_2' name="password_2" aria-describedby="basic-addon2"  >
        </div>

        <div class='input-group'>
        <button type="submit" class="btn btn-primary btn-block" id='register' name='register'>Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
</body>
</html>