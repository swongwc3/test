<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/22/2015
 * Time: 12:03 PM
 */

include_once('itemdb.php');

function process_stats($item)
{
    $item['ItemName'] = $item['SetName'] . ' ' . $item['PartName'];

    $item['SetName'] = '<p>Set: ' . '<a href=' . SITEURL . '/set.php/?set=' . $item['SetID'] . '>' .$item['SetName'] . '</a> (' . $item['SetAbbr'] . ')';

    $stats = array('PA', 'MA', 'PD', 'MD', 'HP', 'Crit', 'ADmg', 'RDmg', 'ACharge', 'ATime', 'ASpd', 'MSpd', 'JSpd', 'Acc', 'Eva', 'ARes', 'SRes');

    $item['Stats'] = $stats;

    if ($item['SpEff']) {
        $item['SpEff'] = '<p>' . $item['SpEff'] . '</p>';
    }

    switch ($item['SetEffect']) {
        case '1':
            $item['SetMessage'] = '<p>Part of set effect.</p>';
            break;
        case '0':
            $item['SetMessage'] = '<p>Not part of set effect.</p>';
            break;
        default:
            $item['SetMessage'] = '';
            break;
    }
    return $item;
};