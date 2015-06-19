<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/19/2015
 * Time: 11:45 AM
 */

include_once('itemdb.php');


$ID = (int) $_GET["item"];

$results = DB::sql("SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, p.PartName FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE i.ID=$ID ORDER BY i.ID");
$result = $results[0];

$item = $result;

$stats = array('HP', 'Crit', 'ADmg', 'RDmg', 'ACharge', 'ATime', 'ASpd', 'MSpd', 'JSpd', 'Acc', 'Eva', 'ARes');

$item['Stats'] = $stats;

if ($item['PA']) {
    $item['PA'] = 'PA: ' . $item['PA'];
}

if ($item['MA']) {
    $item['MA'] = 'MA: ' . $item['MA'];
}

if ($item['PD']) {
    $item['PD'] = 'PD: ' . $item['PD'];
}

if ($item['MD']) {
    $item['MD'] = 'MD: ' . $item['MD'];
}


if ($item['SRes']) {
    $item['SRes'] = '<p>' . get_sres($item['ID']) . '</p>';
}

if ($item['SpEff']) {
    $item['SpEff'] = '<p>' . $item['SpEff'] . '</p>';
}

switch ($item['SetEffect'])
{
    case '1':
        $item['SetEffect'] = '<p>Part of set effect.</p>';
        break;
    case '0':
        $item['SetEffect'] = '<p>Not part of set effect.</p>';
        break;
    default:
        $item['SetEffect'] = null;
        break;
}
include('templates/item.php');