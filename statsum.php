<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/25/2015
 * Time: 12:58 PM
 */

include_once('corefunctions.php');
include_once('itemdb.php');

$setsum = sum_stats($items);

include('templates/statsumtemplate.php');
