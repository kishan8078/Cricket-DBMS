<?php
    
    $dbHost='localhost';
    $dbUser='root';
    $dbPassword='';
    $dbDataBase='logindata';

    if(!$con=mysqli_connect($dbHost,$dbUser,$dbPassword,$dbDataBase))
    {
        die("\nconnection failed");
    }
    else
    {
        //echo"Connection is succesfull";
    }
    


        

    



?>