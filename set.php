<?php

    include_once('db.php');
    include_once('corefunctions.php');

    $setID = (int) $_GET["set"];

    /* search all the information in a set */

    $results = DB::sql("SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, t.CatID, p.PartName, p.PartID FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE i.SetID=$setID ORDER BY i.ID");

    $details = DB::sql("Select * FROM sets WHERE SetID=$setID");
    $details = $details[0];

    $items = array();

    foreach ($results as $result) {
        if (isset($items[$result['TypeName']])) {
            $items[$result['TypeName'].'2'] = $result;
        }
        else
            $items[$result['TypeName']] = $result;
    }

    foreach ($items as $item) {
        $item = process_stats($item);

    }

    include('templates/settemplate.php');
?>