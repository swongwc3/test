<?php

    include_once('db.php');

    $setID = (int) $_GET["set"];

    /* search all the information in a set */

    $results = DB::sql("SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, p.PartName FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE i.SetID=$setID ORDER BY i.ID");

    $details = DB::sql("Select * FROM sets WHERE SetID=$setID");
    $details = $details[0];

    $pieces = array();

    foreach ($results as $result) {
        if (isset($pieces[$result['TypeName']])) {
            $pieces[$result['TypeName'].'2'] = $result;
        }
        else
            $pieces[$result['TypeName']] = $result;
    }

    include('templates/settemplate.php');
?>