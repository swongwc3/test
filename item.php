<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/19/2015
 * Time: 11:45 AM
 */

include_once('itemdb.php');
include_once('corefunctions.php');


$ID = (int) $_GET["item"];

$results = DB::sql("SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, t.CatID, p.PartName, p.PartID FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE i.ID=$ID ORDER BY i.ID");
$item = $results[0];

$item = process_stats($item);

include('templates/item.php');