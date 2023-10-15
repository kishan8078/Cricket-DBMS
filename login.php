<?php
    session_start();
    include('connection.php');
    include('functions.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user_uname=$_POST['user_uname'];
        $user_password=$_POST['user_password'];
        if(!empty($user_uname) && !empty($user_password) && !is_numeric($user_uname))
        {
            $query="select * from userdatas where user_uname='$user_uname' limit 1";
            $q2="select * from userdatas where user_uname='$user_password' limit 1";
            $result=mysqli_query($con,$query);
            $re=mysqli_query($con,$q2);
            if($result||$q2)
            {
                if($result && (mysqli_num_rows($result))>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['user_password']==$user_password)
                    {
                        $_SESSION['user_uname']==$user_data['user_uname'];
                        $alert="<script>alert('not a Wrong username or password');</script>";
                        echo $alert;
                        header("Location:landingPage.php");
                        die;
                    }
                    /*else
                    {
                        $alert="<script>alert('Wrong username or password');</script>";
                        echo $alert;
                        die;
                    }*/
                }
                else
                {
                    $alert="<script>alert('Wrong username or password');</script>";
                    echo $alert;

                    
                }
            }
            else
            {
                echo"user doesn't exist";
            }
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
    <title>userlogin</title>
    <link rel="stylesheet" href="signupAndLoginCSS.css">
    
</head>
<body>
    <main class="main">

        <div class="login">
            <form  method="POST" class="form">
                <h1>User Login</h1>
                <label for="uname">Enter Username</label><input type="text" id="uname" name="user_uname" placeholder="Username" required>
                <br>
                <label for="passwd">Enter Password </label><input type="password" id="passwd" name="user_password" placeholder="Password" required>
                <br>
                <input type="button" class="rst" onclick="history.back()" value="Back" >
                <input type="submit" id="btn5" value="Login" class="sbmt">
                <br>
                <span>Don't have an account?<a href="signup.php">Sign-up.</a></span>
                
            </form>
        </div>
    
    </main>
    
</body>

    <script>
        
        
    
        
        
    </script>


</html>