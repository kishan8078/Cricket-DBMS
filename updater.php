<?php



?>
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
                <!-- <li class="lists"><a href="masterHome.php">Logout</a></li> -->
                <li class="lists"><a href="logDisplay.php">Logs</a></li>
                <li class="lists"><a href="viewall.php">View</a></li>
            </ul>
        </nav> 
    </header>
    <main>
        <form  method='POST'>
            <?php
                
                $sId=$_GET['sId'];
                $fet1="select jno,name,role from player where jno='$sId' ";
                $result1=mysqli_query($con,$fet1);
                $eachRow1=mysqli_fetch_assoc($result1);
                $jno=$eachRow1['jno'];
                $name=$eachRow1['name'];
                $role=$eachRow1['role'];
                
                $fet2="select * from personel where jno='$sId' ";
                $result2=mysqli_query($con,$fet2);
                $eachRow2=mysqli_fetch_assoc($result2);
                $jno=$eachRow2['jno'];
                $age=$eachRow2['age'];
                $nickname=$eachRow2['nickname'];
                $nationality=$eachRow2['nationality'];
                
                $fet3="select * from t20 where jno='$sId' ";
                $result3=mysqli_query($con,$fet3);
                $eachRow3=mysqli_fetch_assoc($result3);
                $jno=$eachRow3['jno'];
                $t20matches=$eachRow3['matches'];
                $t20runs=$eachRow3['runs'];
                $t20average=$eachRow3['average'];
                $t20wickets=$eachRow3['wickets'];
                $t20eco=$eachRow3['economy'];
        
                $fet4="select * from test where jno='$sId' ";
                $result4=mysqli_query($con,$fet4);
                $eachRow4=mysqli_fetch_assoc($result4);
                $jno=$eachRow4['jno'];
                $testmatches=$eachRow4['matches'];
                $testruns=$eachRow4['runs'];
                $testaverage=$eachRow4['average'];
                $testwickets=$eachRow4['wickets'];
                $testeco=$eachRow4['economy'];
        
                $fet5="select * from odi where jno='$sId' ";
                $result5=mysqli_query($con,$fet5);
                $eachRow5=mysqli_fetch_assoc($result5);
                $jno=$eachRow5['jno'];
                $odimatches=$eachRow5['matches'];
                $odiruns=$eachRow5['runs'];
                $odiaverage=$eachRow5['average'];
                $odiwickets=$eachRow5['wickets'];
                $odieco=$eachRow5['economy'];

            ?>
            <fieldset class="diver2">
                <h1 class="lb">Player Table</h1 class="lb">
                <input type="text" name="name" value="<?php echo $name ?>" placeholder="Enter Player Name" ><br>
                <input type="text" name="role" value="<?php echo $role ?>" placeholder="Enter Player Role" ><br>
                <input type="number" name="jno" value="<?php echo $jno ?>" placeholder="Enter Player Jersey Number" ><br>
            </fieldset>
            <fieldset class="diver2">
                <h1 class="lb">Personal Table</h1 class="lb">
                    <input type="text" name="nationality" value="<?php echo $nationality ?>" placeholder="Enter Player Nationality" ><br>
                    <input type="text" name="nickname"  value="<?php echo $nickname ?>"placeholder="Enter Player NickName" ><br>
                    <input type="text" name="age" value="<?php echo $age ?>" placeholder="Enter Player Age" ><br>
            </fieldset>
            <fieldset class="diver3">
                <h1 class="lb">T20 Format</h1 class="lb">
                    <input type="number" name="t20matches" value="<?php echo $t20matches ?>" placeholder="Enter Matches" ><br>
                    <input type="text" name="t20runs" value="<?php echo $t20runs ?>" placeholder="Enter Runs Scored" ><br>
                    <input type="text" name="t20wickets" value="<?php echo $t20wickets ?>" placeholder="Enter Wickets " ><br>
                    <input type="text" name="t20average" value="<?php echo $t20average ?>" placeholder="Enter Average" ><br>
                    <input type="text" name="t20eco" value="<?php echo $t20eco?>" placeholder="Enter Economy" ><br>
            </fieldset>
            <fieldset class="diver3">
                <h1 class="lb">ODI Format</h1 class="lb">
                    <input type="number" name="odimatches" value="<?php echo $odimatches ?>" placeholder="Enter Matches" ><br>
                    <input type="text" name="odiruns" value="<?php echo $odiruns ?>" placeholder="Enter Runs Scored" ><br>
                    <input type="text" name="odiwickets" value="<?php echo $odiwickets ?>" placeholder="Enter Wickets " ><br>
                    <input type="text" name="odiaverage" value="<?php echo $odiaverage ?>" placeholder="Enter Average" ><br>
                    <input type="text" name="odieco" value="<?php echo $odieco ?>" placeholder="Enter Economy" ><br>
            </fieldset>
            <fieldset>
                <h1 class="lb" class="diver3">Test Format</h1 class="lb">
                <input type="number" name="testmatches" value="<?php echo $testmatches ?>" placeholder="Enter Matches" ><br>
                    <input type="text" name="testruns" value="<?php echo $testruns?>" placeholder="Enter Runs Scored" ><br>
                    <input type="text" name="testwickets" value="<?php echo $testwickets ?>" placeholder="Enter Wickets " ><br>
                    <input type="text" name="testaverage" value="<?php echo $testaverage ?>" placeholder="Enter Average" ><br>
                    <input type="text" name="testeco" value="<?php echo $testeco ?>" placeholder="Enter Economy" ><br>
            </fieldset>
            <div class="btns">
                <input type="reset" class="rst" />
                <input type="submit" value="Update" class="sbmt">
                <br>
            </div>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $newname=$_POST['name'];
                $newrole=$_POST['role'];
                $newjno=$_POST['jno'];
            
                $newnationality=$_POST['nationality'];
                $newnickname=$_POST['nickname'];
                $newage=$_POST['age'];
                $newrole=$_POST['role'];
    
                $newt20matches=$_POST['t20matches'];
                $newt20runs=$_POST['t20runs'];
                $newt20wickets=$_POST['t20wickets'];
                $newt20average=$_POST['t20average'];
                $newt20eco=$_POST['t20eco'];
    
                $newodimatches=$_POST['odimatches'];
                $newodiruns=$_POST['odiruns'];
                $newodiwickets=$_POST['odiwickets'];
                $newodiaverage=$_POST['odiaverage'];
                $newodieco=$_POST['odieco'];
    
                $newtestmatches=$_POST['testmatches'];
                $newtestruns=$_POST['testruns'];
                $newtestwickets=$_POST['testwickets'];
                $newtestaverage=$_POST['testaverage'];
                $newtesteco=$_POST['testeco'];
    
                $qry1="update player set jno='$newjno',name='$newname',role='$newrole' where jno=$jno";
                mysqli_query($con,$qry1);
                
                $qry2="update personel set age='$newage',nickname='$newnickname' where jno=$jno";
                mysqli_query($con,$qry2);

                $qry3="update t20 set matches='$newt20matches',runs='$newt20runs',average='$newt20average',economy='$newt20eco' where jno=$jno";
                mysqli_query($con,$qry3);

                $qry4="update test set matches='$newtestmatches',runs='$newtestruns',average='$newtestaverage',economy='$newtesteco' where jno=$jno";
                mysqli_query($con,$qry4);

                $qry5="update odi set matches='$newodimatches',runs='$newodiruns',average='$newodiaverage',economy='$newodieco' where jno=$jno";
                mysqli_query($con,$qry5);
                header("location:popConfirmer.php");
            }
        ?>
    </main>
</body>
</html>