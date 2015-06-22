<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/22/2015
 * Time: 12:03 PM
 */

function process_stats($item)
{
    $item['ItemName'] = $item['SetName'] . ' ' . $item['PartName'];

    $item['SetName'] = '<p>Set: ' . $item['SetName'] . ' (' . $item['SetAbbr'] . ')';

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