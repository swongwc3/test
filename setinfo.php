<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/17/2015
 * Time: 9:33 PM
 */

include_once('db.php');
include_once('config.php');

DB::connection();

$results = DB::sql('SELECT * FROM Items');
var_dump($results);
foreach ($results as $piece) {
    foreach ($piece as $key => $value) {
        if ($value != null) {
            echo $key . ' ' . $value . "<br>";
        }
    }
    echo "<br>";
}