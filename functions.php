<?php
    
    function checkLogin($con)
    {
        if(isset($_SESSION['user_uname']))
        {
            
            $id=$_SESSION['user_uname'];
            $query="select * from userDatas where user_uname='$id' limit 1" ;
            
            $result=mysqli_query($con,$query);
            
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);
                return $user_data;
                die;
               // header("location:landingPage.php");
            }

        }
        header("Location:login.php");
        echo"redirrecting";
        die;



    }


?>