<?php
    session_start();
        include('connection.php');
        include('functions.php');
        
        //$userData=checkLogin($con);
        //$_SESSION=;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>
    <link rel="stylesheet" href="formatCSS.css">
    <style>
        .main{
            text-align: center;
            height:500px;
            padding-top:200px;
        }
    </style>
</head>
<body>
    <header >
        <nav class="navbar">
            <ul>
                <li class="logo">CRICHUB</li>
                <li class="lists"><a href="logout.php">Logout</a></li>
                <li class="lists"><a href="logDisplay.php">Logs</a></li>
            </ul>
        </nav> 
    </header>
    <main class="main">
        <button class="cats" id=""><a href="inserter.php">Insert</a></button>
        <button class="cats" id=""><a href="updateSelectPlayer.php">Update</a></button>
        <button class="cats" id=""><a href="deleter.php">Delete</a></button>
    </main>
</body>
</html>