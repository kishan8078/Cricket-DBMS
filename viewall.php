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
            position: relative;
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
                <h1 class="formats"></h1>
                <li class="lists"><a href="decider.php">Home</a></li>
                <li class="lists"><a href="javascript:history.back()">Back</a></li>
            </ul>
        </nav> 
    </header>
    <main>
        <table class='tables'>
            <tr><th colspan=4 style="text-align:center">PLAYER TABLE</th></tr>
            <tr>
                <th>SL.NO</th>
                <th>Jersey Number</th>
                <th>Name</th>
                <th>Role</th>
            </tr>
            <?php
                $i=1;
                $qry="select * from player";
                $result=mysqli_query($con,$qry);
                while($eachRow=mysqli_fetch_assoc($result))
                {
                    ?><tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $eachRow['jno'] ?></td>
                        <td><?php echo $eachRow['name'] ?></td>
                        <td><?php echo $eachRow['role'] ?></td>
                    </tr><?php
                    $i+=1;
                }
            ?>
        </table>
                <br>
        <table class='tables'>
        <tr><th colspan=5 style="text-align:center">PERSONAL TABLE</th></tr>
            <tr>
                <th>SL.NO</th>
                <th>Jersey Number</th>
                <th>Age</th>
                <th>Nick Name</th>
                <th>Nationality</th>
            </tr>
            <?php
                $i=1;
                $qry="select * from personel";
                $result=mysqli_query($con,$qry);
                while($eachRow=mysqli_fetch_assoc($result))
                {
                    ?><tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $eachRow['jno'] ?></td>
                        <td><?php echo $eachRow['age'] ?></td>
                        <td><?php echo $eachRow['nickname'] ?></td>
                        <td><?php echo $eachRow['nationality'] ?></td>
                    </tr><?php
                    $i+=1;
                }
            ?>
        </table>
                <br>
        <table class='tables'>
            <tr><th colspan=7 style="text-align:center">T20 TABLE</th></tr>
            <tr>
                <th>SL.NO</th>
                <th>Jersey Number</th>
                <th>Matches</th>
                <th>Runs</th>
                <th>Wickets</th>
                <th>Average</th>
                <th>Economy</th>
            </tr>
            <?php
                $i=1;
                $qry="select * from t20";
                $result=mysqli_query($con,$qry);
                while($eachRow=mysqli_fetch_assoc($result))
                {
                    ?><tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $eachRow['jno'] ?></td>
                        <td><?php echo $eachRow['matches'] ?></td>
                        <td><?php echo $eachRow['runs'] ?></td>
                        <td><?php echo $eachRow['wickets'] ?></td>
                        <td><?php echo $eachRow['average'] ?></td>
                        <td><?php echo $eachRow['economy'] ?></td>
                    </tr><?php
                    $i+=1;
                }
            ?>
        </table>
                <br>
    
        <table class='tables'>
        <tr><th colspan=7 style="text-align:center">TEST TABLE</th></tr>
            <tr>
                <th>SL.NO</th>
                <th>Jersey Number</th>
                <th>Matches</th>
                <th>Runs</th>
                <th>Wickets</th>
                <th>Average</th>
                <th>Economy</th>
            </tr>
            <?php
                $i=1;
                $qry="select * from test";
                $result=mysqli_query($con,$qry);
                while($eachRow=mysqli_fetch_assoc($result))
                {
                    ?><tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $eachRow['jno'] ?></td>
                        <td><?php echo $eachRow['matches'] ?></td>
                        <td><?php echo $eachRow['runs'] ?></td>
                        <td><?php echo $eachRow['wickets'] ?></td>
                        <td><?php echo $eachRow['average'] ?></td>
                        <td><?php echo $eachRow['economy'] ?></td>
                    </tr><?php
                    $i+=1;
                }
            ?>
        </table>
                
                <br>
        <table class='tables'>
        <tr><th colspan=7 style="text-align:center">ODI TABLE</th></tr>
            <tr>
                <th>SL.NO</th>
                <th>Jersey Number</th>
                <th>Matches</th>
                <th>Runs</th>
                <th>Wickets</th>
                <th>Average</th>
                <th>Economy</th>
            </tr>
            <?php
                $i=1;
                $qry="select * from odi";
                $result=mysqli_query($con,$qry);
                while($eachRow=mysqli_fetch_assoc($result))
                {
                    ?><tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $eachRow['jno'] ?></td>
                        <td><?php echo $eachRow['matches'] ?></td>
                        <td><?php echo $eachRow['runs'] ?></td>
                        <td><?php echo $eachRow['wickets'] ?></td>
                        <td><?php echo $eachRow['average'] ?></td>
                        <td><?php echo $eachRow['economy'] ?></td>
                    </tr><?php
                    $i+=1;
                }
            ?>
        </table>

    </main>
</body>
</html>