<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/19/2015
 * Time: 11:23 AM
 */

?>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo SITEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo SITEURL; ?>/css/bootstrap-theme.css" rel="stylesheet">
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

<div class="container">
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                include('itemtemplate.php');
                ?>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>/js/bootstrap.min.js"></script>
</body>
</html>