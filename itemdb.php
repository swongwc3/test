<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/18/2015
 * Time: 11:54 AM
 */

include_once('db.php');

/* inserts new piece into database */

function insert_piece($setID, $typeID, $SetEffect) {
    $setID = (int) $setID;
    $typeID = (int) $typeID;
    $SetEffect = (int) $SetEffect;
    return DB::insert("INSERT INTO Items (SetID, TypeID, SetEffect) VALUES ($setID, $typeID, $SetEffect)");
}

    /* modifies piece given ID and column */

function update_item($ID, $colName, $value) {
    DB::sql("UPDATE Items SET `{$colName}` = '{$value}' WHERE `ID`='{$ID}'");
}