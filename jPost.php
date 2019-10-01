<?php

    require 'bootstrap.php';

    // if(isset($_POST['register']))
    // {
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        if(empty($email))
        {
            array_push($errors,'E-mail is required');
        }
        if(empty($password_1))
        {
            array_push($errors,'password is required');
        }
        if ( $password_1 != $password_2)
        {
            array_push($errors,'passwords do not match');
        }

        if(count($errors)==0)
        {
            $password = md5($password_1);
            $query->postData($email,$password);
            $_SESSION['username'] = $email;
            $_SESSION['success'] = "Successfully added";
            //TODO: Routing is not happening below
            header('location:login.php');
        // }
        }