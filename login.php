<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="container">
    <h1>Login</h1>
    <?php include('errors.php');?>
    <form action="login.php" method="POST">
        <!-- <div class='input-group'>
            <label for="email">Email</label>
            <input type="email" required name="email">
        </div> -->

        <div class="input-group mb-3">
            <input type="email" class="form-control" id='email' placeholder="Username" name="email" aria-describedby="basic-addon2"  value=<?= $email ?>>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon2">Password</span>
            </div>
            <input type="password" class="form-control" id='password' placeholder="" name="password" aria-describedby="basic-addon2"  >
            
        </div>
<!-- 
        <div class='input-group'>
            <label for="password">Password</label>
            <input class='input-group-item' type="password"  name="password">
        </div> -->
        <div class='input-group'>
            <button type="submit" class="btn btn-primary" name='login' id='login'>log in</button>
        </div>
        <p>Not yet a member? <a href="view.php">Sign Up</a></p>
    </form>
</body>
</html>

