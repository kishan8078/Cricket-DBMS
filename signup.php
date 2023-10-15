<?php
    session_start();

        include('connection.php');
        include('functions.php');

        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $user_fname=$_POST['user_fname'];
            $user_uname=$_POST['user_uname'];
            $user_password=$_POST['user_password'];
            if(!empty($user_fname) && !empty($user_uname) && !empty($user_password) && !is_numeric($user_uname))
            {
                //$userId=1;
                $query="insert into userdatas(user_fname,user_uname,user_password) values('$user_fname','$user_uname','$user_password')";
                
                mysqli_query($con,$query);
                
                header("Location:landingPage.php");
                echo"inserted";
                die;
            }
            else
            {
                echo"Please Enter values";
            }
        }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signupAndLoginCSS.css">

</head>
<body>
    <main class="main">

        <div class="login">
            <form action="" method="POST" class="form">
                <h1>Sign-up</h1>
                <label for="fname">Enter your name </label><input type="text" name="user_fname" placeholder="Your name">
                <br>
                <label for="fname">Create Username</label><input type="text" name="user_uname" placeholder="Username">
                <br>
                <label for="passwd">Create Password </label><input type="password" name="user_password" placeholder="Password">
                <br>
                <input type="reset" class="rst" />
                <input type="submit" value="Sign-up" class="sbmt">
                <br>
                <span>Already have an account?<a href="login.php">Login.</a></span>
                
            </form>
        </div>
    
    </main>
</body>
</html>