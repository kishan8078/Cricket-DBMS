<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odi</title>
    <link rel="stylesheet" href="formatCSS.css">
</head>
<body>
    <header >
        <nav class="navbar">
            <ul>
                <li class="logo">CRICHUB</li>
                <span class="homie"><li class="lists"><a href="masterHome.php">Home</a></li></span>
                <li class="lists"><a href="login.php">Login</a></li>
            </ul>
        </nav> 
    </header>
    <main class="main">
    <h1 class="formats">ODI FORMAT</h1>
        <form class="tomiddle" method='POST'>
            <fieldset class="playerName">
                
                    <label class="" for="name"><span class='lb'>PLAYER</span>
                        <select name="lang[]" id="name" class="dropDownList">
                            <?php
                                $con=mysqli_connect('localhost','root','','logindata');
                                $qry="select jno,name from player";
                                $result=mysqli_query($con,$qry);
                            ?>
                            <?php while($eachRowOfTable=mysqli_fetch_assoc($result))
                            {
                                $val=$eachRowOfTable['jno']
                                ?><option name=lang[] value="<?php echo $val ?>" ><?php echo $eachRowOfTable['name']?></option>
                                
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
                <input type="submit" value="View" class="sbmt">
                <br>
            </div>
    </main>
    <div class="result">
        <table class='tables'>
            <tr>
                <th>NAME</th>
                <th>RUNS</th>
                <th>AVERAGE</th>
                <th>WICKETS</th>
                <th>ECONOMY</th>
                <th>AGE</th>
                <th>NICKNAME</th>
                <th>JERSEY NUMBER</th>
                <th>ROLE</th>
            </tr>
            <?php
                $con=mysqli_connect('localhost','root','','logindata');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if(!empty($_POST['lang']))
                    {
                        foreach($_POST['lang'] as $plJno)
                        {
                            $fplJno=$plJno;
                        }
                        $qry="select pl.name,pl.role,t.runs,t.average,t.wickets,t.economy,pers.age,pers.nickname,pers.jno from player pl,personel pers,t20 t where pl.jno='$fplJno' and pers.jno='$fplJno' and t.jno='$fplJno' ";
                        $result=mysqli_query($con,$qry);
                        while($eachRow=mysqli_fetch_assoc($result))
                        {
                            ?>
                                <tr>
                                    <td><?php echo $eachRow['name']; ?></td>
                                    <td><?php echo $eachRow['runs']; ?></td>
                                    <td><?php echo $eachRow['average']; ?></td>
                                    <td><?php echo $eachRow['wickets']; ?></td>
                                    <td><?php echo $eachRow['economy']; ?></td>
                                    <td><?php echo $eachRow['age']; ?></td>
                                    <td><?php echo $eachRow['nickname']; ?></td>
                                    <td><?php echo $eachRow['jno']; ?></td>
                                    <td><?php echo $eachRow['role']; ?></td>
                                </tr>
                            <?php
                        }
                    }
                }
            ?>
        </table>
    </div>
    <div class='spacer'></div>
</body>
</html>