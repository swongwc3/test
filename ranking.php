<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/29/2015
 * Time: 10:21 AM
 *
 * ranking search will search by block - acc, body, or full. only one of each option > select options.
 *
 * choose a stat
 *
 * rank by the stat, increasing or decreasing.
 *
 * if element, option to select element, and then increasing or decreasing.
 */

include_once('config.php');
include_once('db.php');
include_once('itemdb.php');

    $result = '';
    if(isset($_POST['formsubmit'])) {

        $block = $_POST['block'];
        $stat = $_POST['stat'];
        $order = (int) $_POST['order'];
        $elem = (int) $_POST['elem'];

        if ($stat == 'SRes') {
            $add = "AND u.ElemID = '$elem' ORDER BY SRes";
            if ($order == '1') {
                $order = $add . " DESC";
            }
            else {
                $order = $add;
            }
        }

        if ($order == '0') {
            $order = "ORDER BY $stat";
        }
        elseif ($order == '1') {
            $order = "ORDER BY $stat DESC";
        }

        $sql = "SELECT u.*, s.SetName FROM `stat_summaries` u JOIN sets s ON u.SetID=s.SetID WHERE `Block` = '$block' AND $stat != '0' $order";

        $results = DB::sql($sql);

        if (sizeof($results))
        {
            ob_start();
            foreach ($results as $setsum)
            {
                $setsum['Title'] = '';
                $stats = array('HP', 'Crit', 'ADmg', 'RDmg', 'ACharge', 'ATime', 'ASpd', 'MSpd', 'JSpd', 'Acc', 'Eva', 'ARes');
                $setsum['Stats'] = $stats;
                if ($setsum['ElemID'] != '0') {
                    $setsum['Elem'] = get_elem($setsum['ElemID']);
                }
                echo '<div class="panel panel-default"><div class="panel-body">';
                echo "<h4>{$setsum['SetName']} {$setsum['Block']} Set Effect</h4>";
                include('templates/statsumtemplate.php');
                echo '</div></div>';
            }
            $result = ob_get_contents();
            ob_end_clean();
        }
        else
        {
            $result =  'No results.';
        }
    }

include('templates/rankingtemplate.php');