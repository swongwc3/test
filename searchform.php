<!-- Form

    Search by...
    Stats
-->
<?php
    include_once('db.php');
    $result = '';
    if(isset($_POST['formsubmit'])) {
       /*
       $query = DB::cleanse($_POST['query']);
       $search = $_POST['query'];
       */

       $sets = $_POST['sets'];
       $stat = $_POST['stat'];

       $search = "";

       if ($sets != '0') {
           $sets = "SetAbbr='" . $sets . "'";
           $search = $sets;

       }
       if ($stat != '0') {
           $stat = $stat . " IS NOT NULL";
           $search = $stat;
       }
       if ($sets != '0' && $stat != '0') {
           $search = $sets . " AND " . $stat;
       }

       $sql = "SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, p.PartName FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE $search ORDER BY i.ID";

       /*
        *
        * SELECT i.*, s.SetName, s.SetAbbr, t.TypeName, p.PartName FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID JOIN parts p ON i.PartID=p.PartID WHERE i.ID=$ID ORDER BY i.ID
        */

       /*
        * $sql = "SELECT i.*, s.SetName, s.SetAbbr,  t.TypeName FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID WHERE $search ORDER BY i.ID";
       */

       $results = DB::sql($sql);
       if (sizeof($results))
       {
           ob_start();
           foreach ($results as $item)
           {
               $itemurl = "item.php?item={$item['ID']}";
               include('templates/searchitem.php');
           }
            $result = ob_get_contents();
                ob_end_clean();
           /*
            * echo "<a href='item.php?id={$result['ID']}'>{$result['i.SetName']} ' ' {$result['i.SetType']}</a>";
*/
       }
       else
       {
           $result =  'No results';
       }
   }

include('templates/searchform.php');
?>