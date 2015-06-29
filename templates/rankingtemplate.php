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

<?php include('navbar.php'); ?>

<div class="container" style="background-color:white">
    <div class="row">
        <div class="col-xs-12">
            <h4>Search Database</h4>

<form method="POST" action="ranking.php">
    <input type="hidden" name="formsubmit" value="1" />
    <label for="block" id="block">Select Stat Summary Type</label>
    <select name="block">
        <option value="Full" <?php echo (isset($_POST['block'])&&$_POST['block']=='Full')?' selected':'' ?>>Full</option>
        <option value="Acc" <?php echo (isset($_POST['block'])&&$_POST['block']=='Acc')?' selected':'' ?>>Weapon / Accessories Only</option>
        <option value="Body" <?php echo (isset($_POST['block'])&&$_POST['block']=='Body')?' selected':'' ?>>Armor Only</option>
    </select>
    <br>
    <label for="stat" id="stat">Select Stat</label>
    <select name="stat">
        <option value="HP" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='HP')?' selected':'' ?>>HP</option>
        <option value="PA" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='PA')?' selected':'' ?>>Physical Attack</option>
        <option value="MA" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='MA')?' selected':'' ?>>Magic Attack</option>
        <option value="PD "<?php echo (isset($_POST['stat'])&&$_POST['stat']=='PD')?' selected':'' ?>>Physical Defense</option>
        <option value="MD" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='MD')?' selected':'' ?>>Magical Defense</option>
        <option value="Crit" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='Crit')?' selected':'' ?>>Critical</option>
        <option value="ADmg" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='ADmg')?' selected':'' ?>>Additional Damage</option>
        <option value="RDmg" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='RDmg')?' selected':'' ?>>Reduced Damage</option>
        <option value="ACharge" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='ACharge')?' selected':'' ?>>Awakening Charge</option>
        <option value="ATime" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='ATime')?' selected':'' ?>>Awakening Time</option>
        <option value="ASpd" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='ASpd')?' selected':'' ?>>Attack Speed</option>
        <option value="MSpd" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='MSpd')?' selected':'' ?>>Movement Speed</option>
        <option value="JSpd" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='JSpd')?' selected':'' ?>>Jump Speed</option>
        <option value="Acc" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='Acc')?' selected':'' ?>>Accuracy</option>
        <option value="Eva" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='Eva')?' selected':'' ?>>Evasion</option>
        <option value="ARes" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='ARes')?' selected':'' ?>>All Elemental Resist</option>
        <option value="SRes" <?php echo (isset($_POST['stat'])&&$_POST['stat']=='SRes')?' selected':'' ?>>Elemental Resist</option>
    </select>
    <br>
    <label for="elem" id="elem">Select Element</label>
    <select name="elem">
        <?php
        $elemarray = get_elems();
        foreach ($elemarray as $elem) {
            echo '<option value=' . $elem['ElemID'];
            echo (isset($_POST['elem'])&&$_POST['elem']=="{$elem['ElemID']}")?'selected':'';
            echo '>' . $elem['ElemName'] . '</option>';
        }
        ?>
    </select>
    <br>
    <label for="order" id="order">Display...</label>
    <select name="order">
        <option value="1" <?php echo (isset($_POST['order'])&&$_POST['order']=='1')?'selected':'' ?>>High to Low</option>
        <option value="0" <?php echo (isset($_POST['order'])&&$_POST['order']=='0')?'selected':'' ?>>Low to High</option>
    </select>
    <input type="submit" value="Search" />
    </form>

        </div>
    </div>
    <?php
    echo $result;
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>


</html>