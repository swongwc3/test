<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/18/2015
 * Time: 11:54 AM
 */

include_once('db.php');

/* inserts new piece into database */

function insert_piece($setID, $typeID, $partID, $SetEffect) {
    $setID = (int) $setID;
    $typeID = (int) $typeID;
    $partID = (int) $partID;
    $SetEffect = (int) $SetEffect;
    return DB::insert("INSERT INTO Items (SetID, TypeID, PartID, SetEffect) VALUES ($setID, $typeID, $partID, $SetEffect)");
}

    /* modifies piece given ID and column */

function update_item($ID, $colName, $value) {
    DB::sql("UPDATE Items SET `{$colName}` = '{$value}' WHERE `ID`='{$ID}'");
}

function get_sres($itemID) {
    $results = DB::sql("SELECT i.SRes, e.ElemName FROM Items i INNER JOIN element e ON i.ResTypeID=e.ElemID WHERE `ID`='{$itemID}'");
    $result = $results[0];
    return $result['ElemName'] . ' Resist +' . $result['SRes'];
}