<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserter</title>
    <link rel="stylesheet" href="formatCSS.css">
    <style>
        body{
            text-align:center;
        }
        main{
            text-align:center;
        }
        fieldset{
            display:inline;
            height:330px;
            width:30%;
            margin: 160px 0px 20px 20px;
            text-align:center;
        }
        .diver2{
            display:inline;
            width:40%;
        }
        .diver3{
            margin-top:-50px;
            display:inline-block;
        }
        .btns{
            display: inline-block;
            /* margin-left: 1050px; */
            text-align:center;
            margin-left:-30px;
        }
        
    </style>
</head>
<body>
    <header >
        <nav class="navbar">
            <ul>
                <li class="logo">CRICHUB</li>
                <li class="lists"><a href="javascript:history.back()">Back</a></li>
                <li class="lists"><a href="masterHome.php">Logout</a></li>
                <li class="lists"><a href="logDisplay.php">Logs</a></li>
            </ul>
        </nav> 
    </header>
    <main>
        <form  method='POST'>
        
        <!-- <div class="popup" id='popup'>
            <h1>You Have Successfully Updated All The TAbles</h1>
            <input type="button" id="btnok" name="ok" value="OK" class="sbmt">
        </div> -->
            <fieldset class="diver2">
                <h1 class="lb">Player Table</h1 class="lb">
                <input type="text" name="name" placeholder="Enter Player Name" required><br>
                <input type="text" name="role" placeholder="Enter Player Role" required><br>
                <input type="number" name="jno" placeholder="Enter Player Jersey Number" required><br>
            </fieldset>
            <fieldset class="diver2">
                <h1 class="lb">Personal Table</h1 class="lb">
                    <input type="text" name="nationality" placeholder="Enter Player Nationality" required><br>
                    <input type="text" name="nickname" placeholder="Enter Player NickName" required><br>
                    <input type="text" name="age" placeholder="Enter Player Age" required><br>
                    <!-- <input type="text" name="role" placeholder="Enter Player Jersey Number"><br> -->
            </fieldset>
            <fieldset class="diver3">
                <h1 class="lb">T20 Format</h1 class="lb">
                    <input type="number" name="t20matches" placeholder="Enter Matches" required><br>
                    <input type="text" name="t20runs" placeholder="Enter Runs Scored" required><br>
                    <input type="text" name="t20wickets" placeholder="Enter Wickets " required><br>
                    <input type="text" name="t20average" placeholder="Enter Average" required><br>
                    <input type="text" name="t20eco" placeholder="Enter Economy" required><br>
                    <!-- <input type="text" name="t20jno" placeholder="Enter Player Jersey Number"><br> -->
            </fieldset>
            <fieldset class="diver3">
                <h1 class="lb">ODI Format</h1 class="lb">
                    <input type="number" name="odimatches" placeholder="Enter Matches" required><br>
                    <input type="text" name="odiruns" placeholder="Enter Runs Scored" required><br>
                    <input type="text" name="odiwickets" placeholder="Enter Wickets " required><br>
                    <input type="text" name="odiaverage" placeholder="Enter Average" required><br>
                    <input type="text" name="odieco" placeholder="Enter Economy" required><br>
                    <!-- <input type="text" name="odijno" placeholder="Enter Player Jersey Number"><br> -->
            </fieldset>
            <fieldset>
                <h1 class="lb" class="diver3">Test Format</h1 class="lb">
                <input type="number" name="testmatches" placeholder="Enter Matches" required><br>
                    <input type="text" name="testruns" placeholder="Enter Runs Scored" required><br>
                    <input type="text" name="testwickets" placeholder="Enter Wickets " required><br>
                    <input type="text" name="testaverage" placeholder="Enter Average" required><br>
                    <input type="text" name="testeco" placeholder="Enter Economy" required><br>
                    <!-- <input type="text" name="testjno" placeholder="Enter Player Jersey Number"><br> -->
            </fieldset>
            <div class="btns">
                <input type="reset" class="rst" />
                <input type="submit" id="btn" name="submit" value="Insert" class="sbmt">
                <br>
            </div>
        </form>
    </main>
</body>
</html>
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
        echo"connection successfull";
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $name=$_POST['name'];
            $role=$_POST['role'];
            $jno=$_POST['jno'];
        
            $nationality=$_POST['nationality'];
            $nickname=$_POST['nickname'];
            $age=$_POST['age'];
            $role=$_POST['role'];

            $t20matches=$_POST['t20matches'];
            $t20runs=$_POST['t20runs'];
            $t20wickets=$_POST['t20wickets'];
            $t20average=$_POST['t20average'];
            $t20economy=$_POST['t20eco'];

            $odimatches=$_POST['odimatches'];
            $odiruns=$_POST['odiruns'];
            $odiwickets=$_POST['odiwickets'];
            $odiaverage=$_POST['odiaverage'];
            $odieconomy=$_POST['odieco'];

            $testmatches=$_POST['testmatches'];
            $testruns=$_POST['testruns'];
            $testwickets=$_POST['testwickets'];
            $testaverage=$_POST['testaverage'];
            $testeconomy=$_POST['testeco'];

            
            $q1="insert into player(jno,name,role) values('$jno','$name','$role')";
            mysqli_query($con,$q1);

            $q2="insert into personel(jno,age,nickname,nationality) values('$jno','$age','$nickname','$nationality')";
            mysqli_query($con,$q2);

            $q3="insert into t20(jno,matches,runs,wickets,average,economy) values('$jno','$t20matches','$t20runs','$t20wickets','$t20average','$t20economy')";
            mysqli_query($con,$q3);

            $q4="insert into odi(jno,matches,runs,wickets,average,economy) values('$jno','$odimatches','$odiruns','$odiwickets','$odiaverage','$odieconomy')";
            mysqli_query($con,$q4);

            $q5="insert into test(jno,matches,runs,wickets,average,economy) values('$jno','$testmatches','$testruns','$testwickets','$testaverage','$testeconomy')";
            mysqli_query($con,$q5);
            header("location:popConfirmer.php");
        }
    }
?>