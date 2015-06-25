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

        .intro {
            padding: 20px 10px;
        }

        .intro > p {
            color: blue;
        }

        .box {
            padding: 10px 5px;
        }

        .box > p {
            color: green;
        }
    </style>
</head>

<body>

<?php include('templates/navbar.php'); ?>

<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

    <div class="intro">
        <h2>Header 2</h2>
        <p>Sample text in intro</p>
    </div>

    <div class="box">
        <h3>Header 3</h3>
        <p>Things in the container but not in the starter-template.</p>
    </div>

</div><!-- /.container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>