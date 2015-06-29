<!-- Form

    Search by...
    Stats
-->
<?php
include_once('config.php');
include_once('db.php');
include_once('itemdb.php');

$result = '';
if(isset($_POST['formsubmit'])) {
    /*
    $query = DB::cleanse($_POST['query']);
    $search = $_POST['query'];
    */

    $sets = (int) $_POST['sets'];
    $stat = $_POST['stat'];
    $slot = $_POST['slot'];
    $elem = (int) $_POST['elem'];

    $search = "";

    if ($sets != '0') {
        $sets = "i.SetID=" . $sets;
        $search = $sets;
    }

    if ($stat != '0') {
        if ($stat == 'SRes') {
            $stat = "ElemID IS NOT NULL AND ElemID =$elem";
        }
        else {
            $stat = $stat . " IS NOT NULL";

        }
        if ($search != "") {
            $search = $search . " AND " . $stat;
        }
        else {
            $search = $stat;
        }
    }

    if ($slot != '0') {
        $slot = "i.TypeID=" . $slot;
        if ($search != "") {
            $search = $search. " AND " . $slot;
        }
        else {
            $search = $slot;
        }
    }


    $sql = "SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, p.PartName FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE $search ORDER BY i.ID";

    $results = DB::sql($sql);
    if (sizeof($results))
    {
        ob_start();
        foreach ($results as $item)
        {
            if ($item['PartName'] != '') {
                $itemurl = SITEURL . "/item.php?item={$item['ID']}";
                include('templates/searchitem.php');
            }
        }
        $result = ob_get_contents();
        ob_end_clean();
        /*
         * echo "<a href='item.php?id={$result['ID']}'>{$result['i.SetName']} ' ' {$result['i.SetType']}</a>";
*/
    }
    else
    {
        $result =  'No results.';
    }
}

include('templates/searchform.php');
?>