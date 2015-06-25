<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/25/2015
 * Time: 12:58 PM
 */

$setsum['Title'] = "Stat Summary";

$addstats = array('HP', 'PA', 'MA', 'PD', 'MD', 'Crit', 'ADmg', 'RDmg', 'ACharge', 'ATime', 'ASpd', 'MSpd', 'JSpd', 'Acc', 'Eva', 'ARes', 'SRes');

foreach ($items as $item) {
    foreach ($addstats as $stat) {
        foreach ($item as $key => $value) {
            if ($key == $stat) {
                if (isset($setsum[$key])) {
                    $setsum[$key] += (int)$value;
                } else {
                    $setsum[$key] = (int)$value;
                }

            }
            if ($key == 'SpEff') {
                $setsum['SpEff'] = $value;
            }
        }
    }
}

$stats = array('HP', 'Crit', 'ADmg', 'RDmg', 'ACharge', 'ATime', 'ASpd', 'MSpd', 'JSpd', 'Acc', 'Eva', 'ARes');

$setsum['Stats'] = $stats;

include('templates/statsumtemplate.php');
