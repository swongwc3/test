<?php
    include_once('config.php');
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <style>
        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
        body {
            padding-top: 50px;
        }
    </style>
</head>

<body>

<?php include('templates/navbar.php'); ?>

<div class="jumbotron">
    <div class="container">
        <h1>Testing Site</h1>
        <p>random stuff</p>
    </div>
</div>

<div class="container">

</div><!-- /.container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo SITEURL; ?>/js/bootstrap.min.js"></script>
</body></html>