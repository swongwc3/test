<!-- Form

    Search by...
    Stats
-->

<form method="POST" action="searchform.php">
    <input type="hidden" name="formsubmit" value="1" />
        <label for="query">Stat Type</label>
        <input type="text" id="query" name="query" value="<?php echo isset($_POST['query'])?$_POST['query']:''; ?>" />
    <input type="submit" value="Search" />
</form>
<?php
    include_once('db.php');

   if(isset($_POST['formsubmit'])) {
       $query = DB::cleanse($_POST['query']);
       $search = $_POST['query'];
       $sql = "SELECT i.*, s.SetName, s.SetAbbr,  t.TypeName FROM items i INNER JOIN sets s ON i.SetID=s.SetID JOIN type t ON i.TypeID=t.TypeID WHERE $search IS NOT NULL ORDER BY i.ID";
       $results = DB::sql($sql);
       if (sizeof($results)) {
           foreach ($results as $result) {
               echo $result['SetName'] . $result['TypeName'] . '<br>';
               foreach ($result as $key => $value) {
                   if ($value != null) {
                       echo $key . $value . '<br>';
                   }

               }
               echo '<br>';
               /*
                * echo "<a href='item.php?id={$result['ID']}'>{$result['i.SetName']} ' ' {$result['i.SetType']}</a>";
               */
           }
       } else {
           echo 'No results';
       }

   }
?>