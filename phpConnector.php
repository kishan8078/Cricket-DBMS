<?php
    $fname=$_POST['fname'];
    $uname=$_POST['uname'];
    $passwd=$_POST['passwd'];


    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into userddata(firstname,userName,password)values(?,?,?)");
        $stmt->bind_param("sss",$fname,$uname,$passwd);
        $stmt->execute();
        echo"Connection succesfull.......";
        $stmt->close();
        $conn->close();
    }
?>