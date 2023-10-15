<?php
    $dbHost='localhost';
    $dbUser='root';
    $dbPassword='';
    $dbDataBase='logindata';

    if(!$con=mysqli_connect($dbHost,$dbUser,$dbPassword,$dbDataBase))
    {
        die("\nconnection failed");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
    <link rel="stylesheet" href="formatCSS.css" >
    <style>
        .tables{
            margin-top:150px;
        }
        th{
            
        }
        .formats{
            z-index: 11;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="logo">CRICHUB</li>
                <h1 class="formats">LOGS</h1>
                <li class="lists"><a href="javascript:history.back()">Back</a></li>
                <li class="lists"><a href="masterHome.php">Logout</a></li>
            </ul>
        </nav> 
    </header>
    <main>
    
        <table class='tables'>
            <tr>
                <th>SL.NO</th>
                <th>Jersey Number</th>
                <th>Operation Done</th>
                <th>Time</th>
            </tr>
            <?php
                $qry="select * from log";
                $result=mysqli_query($con,$qry);
                while($eachRow=mysqli_fetch_assoc($result))
                {
                    ?><tr>
                        <td><?php echo $eachRow['sl_no'] ?></td>
                        <td><?php echo $eachRow['jno'] ?></td>
                        <td><?php echo $eachRow['task'] ?></td>
                        <td><?php echo $eachRow['time'] ?></td>
                    </tr><?php
                }
            ?>
            
        </table>

    </main>
</body>
</html>