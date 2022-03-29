<?php
include("../../api/db.php");
$sql = "SELECT * FROM `house` order by houseId desc";
$order = mysqli_query($db, $sql);
for(;$row = mysqli_fetch_array($order, MYSQLI_ASSOC);) {
?>

<?php
}
?>