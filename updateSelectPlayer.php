<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="formatCSS.css">
    <style>
        .formats
        {
            margin-left:34%;
        }
    </style>
</head>
<body>
    <header >
        <nav class="navbar">
            <ul>
                <li class="logo">CRICHUB</li>
                <span class="homie"><li class="lists"><a href="javascript:history.back()">Back</a></li></span>
                <li class="lists"><a href="logout.php">Logout</a></li>
            </ul>
        </nav> 
    </header>
    <main class="main">
    <h1 class="formats">SELECT PLAYER TO UPDATE</h1>
        <form class="tomiddle" method='POST'>
            <fieldset class="playerName">
                    <label class="" for="name"><span class='lb'>PLAYER</span>
                        <select name="lang[]" id="name" class="dropDownList">
                        <?php
                            $con=mysqli_connect('localhost','root','','logindata');
                            $qry="select jno,name from player";
                            $result=mysqli_query($con,$qry);
                        ?>
                            <?php while($eachRow=mysqli_fetch_assoc($result))
                            {
                                $val=$eachRow['jno']
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
                <input type="submit" onclick="submit()"value="Continue" class="sbmt">
                <br>
            </div>
        </form>
    </main>
        <?php
            $con=mysqli_connect('localhost','root','','logindata');
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                if(!empty($_POST['lang']))
                {
                    foreach($_POST['lang'] as $plJno)
                    {
                        $sId=$plJno;
                    }
                    header("location:updater.php?sId=".$sId);
                }
            }
        ?>
</body>
</script>
</html>