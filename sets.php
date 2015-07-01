<?php
include_once('config.php');
include_once('db.php');
include_once('itemdb.php');
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
    </style>
</head>
<body style="background-color: #999">


<?php
include('templates/navbar.php');
?>

<div class="container" style="background-color: #ffffff;">

    <div class="row">
        <div class="col-xs-12">
            <h2>Ice Burner Sets</h2>
        </div>
    </div>

    <div class="row">
<?php
    $sets = get_sets();
    foreach ($sets as $set) {
        echo '<div class="col-sm-6 col-md-4"><div class="thumbnail">';
        echo '<img src="' . $set['SetID'] . '-thumb.jpg" alt="' . $set['SetName'] . '">';
        echo '<div class="caption">';
        echo '<a href=' . SITEURL . '/set.php/?set=' . $set['SetID'] . '><h4>' . $set['SetName'] . '</h4></a>';
        echo '</div></div></div>';
    }
?>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>/js/bootstrap.min.js"></script>
</body>

</html>