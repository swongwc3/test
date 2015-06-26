<?php
    include_once('config.php');
    include_once('db.php');
    include_once('corefunctions.php');

    $setID = (int) $_GET["set"];

    /* search all the information in a set */

    $results = DB::sql("SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, t.CatID, p.PartName, p.PartID FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE i.SetID=$setID ORDER BY i.ID");

    $details = DB::sql("Select * FROM sets WHERE SetID=$setID");
    $details = $details[0];

    $full = array();
    $body = array();
    $acc = array();

    foreach ($results as $item) {
        if (isset($full[$item['TypeName']])) {
            $full[$item['TypeName'].'2'] = $item;
        }
        else {
            $full[$item['TypeName']] = $item;
        }

        if ($item['CatID'] == '1') {
            if (isset($body[$item['TypeName']])) {
                $body[$item['TypeName'].'2'] = $item;
            }
            $body[$item['TypeName']] = $item;
        }
        if ($item['CatID'] == '2') {
            $acc[$item['TypeName']] = $item;
        }
    }

    $items = $full;

    include('templates/settemplate.php');
?>