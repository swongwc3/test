<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Verdana";
            font-size: 100%;
            background-color: #25455E;

        }

        div {
            border-radius: 3px;
        }
        h1 {
            text-align: center;
            background-color: #777F85;
            letter-spacing: 10px;
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 0.90em;
            font-variant: small-caps;
        }

        ::selection {
            color: #86EBA7;
            background: white;
        }

        p {
            font-size: 0.75em;
            text-indent: 10px;
            margin: auto;
            border-radius: 5px;
        }

        p::first-line {
            color: #FDB74A;
            font-variant: small-caps;
        }

        p::first-letter {
            font-size: 0.95em;
            font-weight: bold;
        }

        div > p {
            background-color: white;
            width: 90%;
            align-content: center;
            padding: 2px;
        }

        a:link {
            color: #5582BB;
        }

        a:visited {
            color: #25455E;
        }

        a:hover {
            color: #B7DCEE;
        }

        a:active {
            color: #FBDD67;
        }

        .paper {
            background-color: #5582BB;
            padding: 5px;
            margin: 5px;
            float: left;
            width: 30%;

        }

        #timebox {
            background-color: #777F85;
            font-size: 0.65em;
            padding: 2px;
            margin: 5px;
            width: 60%;
            float: right;
        }

        .morebox {
            font-size: 0.65em;
            padding-left: 2px;
            padding-right: 2px;
            width: 25%;
            float: right;
            margin: 5px;
            background-color: #777F85;
        }

        ul {
            list-style-type: none;
            font-size: 0.70em;
            overflow: hidden;
            margin: 0;
            padding 0;
        }

        li {
            float: left;
            text-align: center;
        }

        a {
            display: block;
            width: 60;
            background-color: #B7DCEE;
            text-decoration: none;
        }

        q:lang(yo) {
            quotes: "!!" "!!";
        }

        .countdown {
            clear: both;
            float: left;
            font-size: 0.75em;
            width: 80%;
        }
        .clear {
            clear: both;
            background-color: #FDB74A;
            height: 100px;
            width: 30%;
        }
        #left {
            float: right;
        }
    </style>
</head>

<body>

<h1>Sharon's Sample Test Page!</h1>

<div class = "paper">
    <p>
        This is just a thing where I put together php, css, and html stuff!
    </p>
    <ul>
        <li>
           <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Page 2</a>
        </li>
        <li>
            <a href="#">Page 3</a>
        </li>
    </ul>

    <div class = "countdown morebox">
        <q lang="yo">
            <?php
            $target = mktime(0,0,0,6,30,2015);
            $today = time();
            $dif = $target - $today;
            $days = floor($dif/86400);
            $hours = floor(($dif - ($days*86400)) / 3600);
            $mins = floor(($dif - ($hours*3600) - ($days*86400)) / 60);
            $secs = floor($dif % 60);
            echo 'Time until September 30, 2015 is... ' . $days . ':' . $hours . ':' . $mins . ':' . $secs . '.';

            ?>
        </q>
    </div>
</div>
<div class="clear">

</div>

<div id = "left">
<div id = "timebox">

<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/15/2015
 * Time: 2:57 PM
 */

date_default_timezone_set('America/Los_Angeles');

echo '<strong>Currently: ' . date('F j, Y h:i:sa P') . 'GMT</strong></br>';

/*
 * http://php.net/manual/en/function.date.php
 * 'm/d/y' - 06/15/2015
 * 'm/d/Y' - 06/15/2015
 * 'H:i:s' - 00:21:45
 * 'g:i A' - 5:45 PM
 * 'G:ia' - 05:45pm
 * '\o\n l jS F Y' - on Saturday 24th March 2012
 * j - day (jS 24th)
 * F - month (march)
 * l - day of week (Saturday)
 */
?>
</div>

            <div class="morebox">stuff underneath the timebox!</div>
            <div class="morebox">stuff underneath the timebox!</div>
            <div class="morebox">stuff underneath the timebox!</div>

</div>



</body></html>