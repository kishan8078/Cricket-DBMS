<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deleter</title>
    <link rel="stylesheet" href="formatCSS.css">
</head>
<style>
   
</style>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="logo">CRICHUB</li>
                <li class="lists"><a href="javascript:history.back()">Back</a></li>
                <li class="lists"><a href="masterHome.php">Logout</a></li>
                <li class="lists"><a href="logDisplay.php">Logs</a></li>
            </ul>
        </nav> 
    </header>
    <main class="main">
        <form class="tomiddle" method='POST'>
            <fieldset class="playerName">
                
                <?php
                    $dbHost='localhost';
                    $dbUser='root';
                    $dbPassword='';
                    $dbDataBase='logindata';
                
                    if(!$con=mysqli_connect($dbHost,$dbUser,$dbPassword,$dbDataBase))
                    {
                        die("\nconnection failed");
                    }

                    $qry="select jno,name from player";
                    $result=mysqli_query($con,$qry);
                    
                    
                ?>
                <label class="" for="name"><span class="lb">PLAYER</span class="lb">
                    <select name="lang[]" id="name" class="dropDownList">
                        
                        <?php while($eachRow=mysqli_fetch_assoc($result))
                        {
                            $val=$eachRow['jno'];
                            ?><option name=lang[] value="<?php echo $val?>" ><?php echo $eachRow['name']?></option>
                            
                            <?php
                        }
                        ?>
                    </select>
                </label><br>
                    <input type="checkbox" class="useless"><br>
                    <input type="checkbox" class="useless"><br>
            </fieldset>
            <div class="btns">
                <input type="reset" class="rst" />
                <input type="submit" name='submit' value="Delete" class="sbmt">
                <br>
            </div>
            <?php
            
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                
                    if(!empty($_POST['lang']))
                    {
                        foreach($_POST['lang'] as $plJno)
                        {
                            $fplJno=$plJno;
                        }
                            $dlqry="delete from player where jno='$fplJno' ";
                            mysqli_query($con,$dlqry);
                            header("location:popConfirmer.php");
                            // echo $fplJno;
                        }
                        
                    }
                
            ?>
        </form>
    </main>
</body>
</html>