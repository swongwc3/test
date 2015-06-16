

<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/16/2015
 * Time: 1:05 PM
 */

$conn = new mysqli("localhost", "root", "", "my_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID, Name, LName FROM Sample";
$result = $conn->query($sql);

$result_array = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($result_array as $result)
{
    echo $result['ID'];
}

$conn->close();

?>

