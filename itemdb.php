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

function get_elem($elemID) {
    $results = DB::sql("SELECT * FROM element WHERE `ElemID`='{$elemID}'");
    $result = $results[0];
    return $result['ElemName'];
}

function get_sets() {
    return DB::sql("SELECT * FROM sets");
}

function get_types() {
    return DB::sql("SELECT * FROM type");
}

function add_summary($setID) {
    $results = DB::sql("SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, t.CatID, p.PartName, p.PartID FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE i.SetID=$setID ORDER BY i.ID");

    $full = array();
    $body = array();
    $acc = array();

    foreach ($results as $item) {
        if (isset($full[$item['TypeName']])) {
            $full[$item['TypeName'].'2'] = $item;
        }
        $full[$item['TypeName']] = $item;

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
    $sum = sum_stats($full);

    $sql = "INSERT INTO `stat_summaries` (SetID, `Block`, HP, PA, MA, PD, MD, Crit, ADmg, RDmg, ACharge, ATime, ASpd, MSpd, JSpd, Acc, Eva, ARes, SRes, ElemID, SpEff) VALUES ($setID, 'Full', '{$sum['HP']}', '{$sum['PA']}', '{$sum['MA']}', '{$sum['PD']}', '{$sum['MD']}', '{$sum['Crit']}', '{$sum['ADmg']}', '{$sum['RDmg']}', '{$sum['ACharge']}', '{$sum['ATime']}', '{$sum['ASpd']}', '{$sum['MSpd']}', '{$sum['JSpd']}', '{$sum['Acc']}', '{$sum['Eva']}', '{$sum['ARes']}', '{$sum['SRes']}', '{$sum['ElemID']}', '{$sum['SpEff']}')";

    DB::sql($sql);

    $sum = sum_stats($body);

    $sql = "INSERT INTO `stat_summaries` (SetID, `Block`, HP, PA, MA, PD, MD, Crit, ADmg, RDmg, ACharge, ATime, ASpd, MSpd, JSpd, Acc, Eva, ARes, SRes, ElemID, SpEff) VALUES ($setID, 'Body', '{$sum['HP']}', '{$sum['PA']}', '{$sum['MA']}', '{$sum['PD']}', '{$sum['MD']}', '{$sum['Crit']}', '{$sum['ADmg']}', '{$sum['RDmg']}', '{$sum['ACharge']}', '{$sum['ATime']}', '{$sum['ASpd']}', '{$sum['MSpd']}', '{$sum['JSpd']}', '{$sum['Acc']}', '{$sum['Eva']}', '{$sum['ARes']}', '{$sum['SRes']}', '{$sum['ElemID']}', '{$sum['SpEff']}')";

    DB::sql($sql);

    $sum = sum_stats($acc);

    $sql = "INSERT INTO `stat_summaries` (SetID, `Block`, HP, PA, MA, PD, MD, Crit, ADmg, RDmg, ACharge, ATime, ASpd, MSpd, JSpd, Acc, Eva, ARes, SRes, ElemID, SpEff) VALUES ($setID, 'Acc', '{$sum['HP']}', '{$sum['PA']}', '{$sum['MA']}', '{$sum['PD']}', '{$sum['MD']}', '{$sum['Crit']}', '{$sum['ADmg']}', '{$sum['RDmg']}', '{$sum['ACharge']}', '{$sum['ATime']}', '{$sum['ASpd']}', '{$sum['MSpd']}', '{$sum['JSpd']}', '{$sum['Acc']}', '{$sum['Eva']}', '{$sum['ARes']}', '{$sum['SRes']}', '{$sum['ElemID']}', '{$sum['SpEff']}')";

    DB::sql($sql);
}

function sum_stats($array) {
    $setsum = array();

    $setsum['Title'] = "Stat Summary";

    $addstats = array('HP', 'PA', 'MA', 'PD', 'MD', 'Crit', 'ADmg', 'RDmg', 'ACharge', 'ATime', 'ASpd', 'MSpd', 'JSpd', 'Acc', 'Eva', 'ARes', 'SRes');

    foreach ($array as $item) {
        foreach ($addstats as $stat) {
            foreach ($item as $key => $value) {
                if ($key == $stat) {
                    if (isset($setsum[$key])) {
                        $setsum[$key] += (int)$value;
                    } else {
                        $setsum[$key] = (int)$value;
                    }
                }
            }
        }
        foreach ($item as $key => $value) {
            if ($key == 'SpEff' && $item[$key]) {
                if (isset($setsum[$key])) {
                    $setsum[$key] .= '<br>' . $value;
                }
                else {
                    $setsum[$key] = $value;
                }
            }
        }

        foreach ($item as $key => $value) {
            if ($key == 'ElemID' && $item[$key] != '') {
                $setsum['ElemID'] = $value;
                $setsum['Elem'] = get_elem($value);
            }
        }
    }

    $stats = array('HP', 'Crit', 'ADmg', 'RDmg', 'ACharge', 'ATime', 'ASpd', 'MSpd', 'JSpd', 'Acc', 'Eva', 'ARes');

    $setsum['Stats'] = $stats;

    return $setsum;
}