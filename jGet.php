<?php

    require 'bootstrap.php';

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