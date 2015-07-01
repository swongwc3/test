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
            <h3>Rank by Stats</h3>

<form class="form-horizontal" method="POST" action="ranking.php">
    <input type="hidden" name="formsubmit" value="1" />
    <div class="form-group">
        <div class="col-sm-2 col-md-3"></div>
    <label for="block" id="block" class="col-sm-2 control-label">Summary Type</label>
        <div class="col-sm-6 col-md-4">
    <select class="form-control" name="block">
        <option value="Full" <?php echo (isset($_POST['block'])&&$_POST['block']=='Full')?' selected':'' ?>>Full</option>
        <option value="Acc" <?php echo (isset($_POST['block'])&&$_POST['block']=='Acc')?' selected':'' ?>>Weapon / Accessories Only</option>
        <option value="Body" <?php echo (isset($_POST['block'])&&$_POST['block']=='Body')?' selected':'' ?>>Armor Only</option>
    </select>
            </div>
        <div class="col-sm-2 col-md-3"></div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 col-md-3"></div>
    <label for="stat" class="col-sm-2 control-label">Stat</label>
        <div class="col-sm-6 col-md-4">
            <select class="form-control" name="stat" id="stat">
                <?php
                $statarray = get_statnamearray();
                foreach ($statarray as $stat) {
                    echo '<option value=' . $stat['Abbr'];
                    echo (isset($_POST['stat'])&&$_POST['stat']=="{$stat['Abbr']}")?' selected':'';
                    echo '>' . $stat['FullName'] . '</option>';
                }
                ?>
            </select>
            </div>
            <div class="col-sm-2 col-md-3"></div>
    </div>
    <div class="form-group" id="elem">
        <div class="col-sm-4 col-md-4"></div>
    <label for="elem" class="col-sm-2 control-label">Element</label>
        <div class="col-sm-4 col-md-3">
    <select class="form-control" name="elem">
        <?php
        $elemarray = get_elems();
        foreach ($elemarray as $elem) {
            echo '<option value=' . $elem['ElemID'];
            echo (isset($_POST['elem'])&&$_POST['elem']=="{$elem['ElemID']}")?'selected':'';
            echo '>' . $elem['ElemName'] . '</option>';
        }
        ?>
    </select>
            </div>
        <div class="col-sm-2 col-md-3"></div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 col-md-3"></div>
    <label for="order" id="order" class="col-sm-2 control-label">Display...</label>
        <div class="col-sm-6 col-md-4">
    <select class="form-control" name="order">
        <option value="1" <?php echo (isset($_POST['order'])&&$_POST['order']=='1')?'selected':'' ?>>High to Low</option>
        <option value="0" <?php echo (isset($_POST['order'])&&$_POST['order']=='0')?'selected':'' ?>>Low to High</option>
    </select>
            </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2 col-md-3" ></div>
        <div class="col-sm-8 col-md-6">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
        </div>
        <div class="col-sm-2 col-md-3"></div>
    </div>
    </form>

        </div>
    </div>
    <?php
    echo $result;
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>/js/bootstrap.min.js"></script>
<script language="JavaScript">
    $.fn.updateDropdown = function () {
        if ($(this).val() == 'SRes') {
            $("#elem").show();
        } else {
            $("#elem").hide();
        }
        return this;
    };

    $().ready(function () {
        $("#stat").updateDropdown().on('change', function () {
            $(this).updateDropdown()
        });
    });
</script>
</body>


</html>