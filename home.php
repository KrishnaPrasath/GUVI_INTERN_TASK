<?php include('server.php');

    if(empty($_SESSION['username']))
    {
        header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>HomePage</title>
</head>
<body>
    <div class="container">

        
        <?php if(isset($_SESSION['success'])):?>
            <div>
                <h3><?= $_SESSION['username']." has been ".$_SESSION['success']; unset($_SESSION['success']); ?></h3>
                <p><a href="home.php?logout='1">Logout</a></p>
            </div>
        <?php endif ?>
    </div>
</body>
</html>