<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>popConfirmer</title>
    <link rel="stylesheet" href="formatCSS.css">
</head>
<body>
<style>

        
        .popup{
            width:600px;
            height:600px;
            box-shadow:1px 3px 9px 3px;
            position:relative;
            margin-left:32%;
            margin-top:5%;
            z-index:3;
            border-radius:5px;
        }
        #dlt{
            position:absolute;
            text-align:center;
            margin-top:60%;
            margin-left:40%;
        }
        h1{
            position:absolute;
            margin-top:30%;
            margin-left:18%;
            text-align:center;
        }

    </style>

</head>
<body>
    <form method='post'>
        <div class="popup" id='popup'>
            <h1>Your Changes Are Effected!</h1>
            <button class="cats" id="dlt"><a href="deleter.php">OK</a></button>
        </div>
    </form>
</body>
</html>
<?php

    if(isset($_POST['submit']))
    {
        header("location:deleter.php");
    }

?>