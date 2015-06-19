<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/19/2015
 * Time: 2:06 PM
 */
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <style>
body {
    padding-top: 50px;
        }
        .media p {
    text-align: left;
        }

    </style>
</head>
<body style="background-color: #999">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <form method="POST" action="searchform.php">
                <input type="hidden" name="formsubmit" value="1" />
                <!--
        <label for="query">Stat Type</label>
        <input type="text" id="query" name="query" value="<?php echo isset($_POST['query'])?$_POST['query']:''; ?>" />
        -->
                <label for="sets">Select Set</label>
                <select name="sets" id="sets">
                    <option value="0"></option>
                    <option value="AA">Arch Angel</option>
                    <option value="AD">Arch Devil</option>
                </select>
                <br>
                <label for="stat" id="stat">Select Stat</label>
                <select name="stat">
                    <option value="0"></option>
                    <option value="HP">HP</option>
                    <option value="PA">Physical Attack</option>
                    <option value="MA">Magic Attack</option>
                    <option value="PD">Physical Defense</option>
                    <option value="MD">Magical Defense</option>
                    <option value="Crit">Critical</option>
                    <option value="ADmg">Additional Damage</option>
                    <option value="RDmg">Reduced Damage</option>
                    <option value="ACharge">Awakening Charge</option>
                    <option value="ATime">Awakening Time</option>
                    <option value="ASpd">Attack Speed</option>
                    <option value="MSpd">Movement Speed</option>
                    <option value="JSpd">Jump Speed</option>
                    <option value="Acc">Accuracy</option>
                    <option value="Eva">Evasion</option>
                    <option value="ARes">All Elemental Resist</option>
                </select>
                <input type="submit" value="Search" />
            </form>
        </div>
    </div>
    <?php
    echo $result;
    ?>
</div>

</body>
</html>