<?php

    require 'bootstrap.php';

    session_start();

    $email = '';
    
    $errors = array();
    
    // while($row = mysqli_fetch_array($results)){
    //     file_put_contents('config.json', json_encode($row));
    // }

    $jsonData = $query->getData();

    file_put_contents('config.json', json_encode($jsonData));


    if(isset($_POST['register']))
    {
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
            header('location:login.php');
        }

        if(isset($_GET['logout']))
        {
            session_destroy();
            unset($_SESSION['username']);
            header('location:login.php');
        }
        
    }
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email))
        {
            array_push($errors,'E-mail is required');
        }
        if(empty($password))
        {
            array_push($errors,'password is required');
        }
        if(count($errors)==0)
        {
            $newPassword = md5($password);
            $info = $query->auth($email,$newPassword);
            var_dump($info);
            

            if($info)
            {
                $_SESSION['username'] = $email;
                $_SESSION['success'] = "Successfully logged in";
                $_SESSION['info']=$info;
                header('location:home.php');

            }else
            {
                array_push($errors,"The username/password is incorrect");   
                

            }
        }

    }