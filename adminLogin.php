<?php
    session_start();
    include('connection.php');
    include('functions.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $admin_uname=$_POST['admin_uname'];
        $admin_password=$_POST['admin_password'];
        if(!empty($admin_uname) && !empty($admin_password) && !is_numeric($admin_uname))
        {
            $query="select * from admin where admin_uname='$admin_uname' limit 1";
            $result=mysqli_query($con,$query);
            if($result)
            {
                if($result && (mysqli_num_rows($result))>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['admin_password']==$admin_password)
                    {
                        $_SESSION['admin_uname']==$user_data['admin_uname'];
                        $alert="<script>alert('not a Wrong username or password');</script>";
                        echo $alert;
                        header("Location:landingPageOfAdmin.php");
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
    <title>Adminlogin</title>
    <link rel="stylesheet" href="signupAndLoginCSS.css">
    
</head>
<body>
    <main class="main">

        <div class="login">
            <form  method="POST" class="form">
                <h1> Admin Login</h1>
                <label for="uname">Enter Username</label><input type="text" id="uname" name="admin_uname" placeholder="Admin name" required>
                <br>
                <label for="passwd">Enter Password </label><input type="password" id="passwd" name="admin_password" placeholder="Password" required>
                <br>
                <input type="button" class="rst" onclick="history.back()" value="Back" >
                <input type="submit" id="btn5" value="Login" class="sbmt">
                <br>
                
                
            </form>
        </div>
    
    </main>
    
</body>

    <script>
        
        
    
        
        
    </script>


</html>