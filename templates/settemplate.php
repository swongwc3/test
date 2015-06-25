<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }

        h3, h4 {
            text-align: center;
        }

        .media p {
            text-align: left;
        }

        .media h4 {
            font-weight: normal;
            font-size: 1.2em;
            text-align: left;
        }

    </style>
</head>
<body style="background-color: #999">

<?php include('navbar.php'); ?>

<div class="container" style="background-color: #ffffff;">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $details['SetName']; ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <img src="" width="100%" height="250px">
                    <div class="panel panel-default">
                        <div class="panel-body">
                    <?php include('statsum.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Abbreviation: <?php echo $details['SetAbbr']; ?></p>

                            <p>Alternate Name: </p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Set Availability</p>

                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-4">char1</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char2</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char3</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char4</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char5</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char6</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char7</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char8</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char9</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char10</div>
                                <div class="col-md-2 col-sm-3 col-xs-4">char11</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Pieces in Set</p>

                            <div class="row">
                                <?php
                                foreach ($items as $key => $value) {
                                    if ($items[$key]['PartID'] != '55')
                                    {
                                        echo '<div class="col-md-3 col-sm-4 col-xs-6">';
                                        echo $items[$key]['PartName'];
                                        echo '</div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Armor</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                foreach ($items as $item) {
                                    if ($item['CatID'] == '1') {
                                        $item = process_stats($item);
                                        $item['SetName'] = '';
                                        $item['SetMessage'] = '';
                                        include('templates/itemtemplate.php');
                                    }
                                }
                            ?>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p>Set Effects:</p>
                                    <ul>
                                        <li>line 1</li>
                                        <li>line 2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Weapon / Accessory </h4>

                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            foreach ($items as $item) {
                                if ($item['CatID'] == '2') {
                                    $item = process_stats($item);
                                    $item['SetName'] = '';
                                    $item['SetMessage'] = '';
                                    include('itemtemplate.php');
                                }
                            }
                            ?>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p>Set Effects:</p>
                                    <ul>
                                        <li>line 1</li>
                                        <li>line 2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>