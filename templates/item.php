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
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img src="ID-char.img" width="50" height="50">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $item['SetName'];echo ' ' . $item['PartName'] ?></h4>
                        <p>Set: <?php echo $item['SetName']; echo ' (' . $item['SetAbbr'] . ')'; ?></p>
                        <p>Slot: <?php echo $item['TypeName']; ?></p>
                        <p>Stats:</p>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-xs-6"><?php echo $item['PA']; ?></div>
                                    <div class="col-xs-6"><?php echo $item['MA']; ?></div>
                                    <div class="col-xs-6"><?php echo $item['PD']; ?></div>
                                    <div class="col-xs-6"><?php echo $item['MD']; ?></div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <?php
                                foreach ($item['Stats'] as $stat) {
                                    if ($item[$stat])
                                    {
                                        echo '<p>' . $stat . ' ' . $item[$stat] . '</p>';
                                    }
                                }
                                echo $item['SRes'];
                                echo $item['SpEff'];
                                echo $item['SetEffect'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>