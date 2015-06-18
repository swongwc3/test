<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/17/2015
 * Time: 9:33 PM
 */

include_once('db.php');

DB::connection();

$results = DB::sql('SELECT * FROM Items');

foreach ($results as $piece) {
    foreach ($piece as $key => $value) {
        if ($value != null) {
            echo $key . ' ' . $value . "<br>";
        }
    }
    echo "<br>";
}