<?php
include("../../api/db.php");
$houseId = $_GET['houseId'];
$sql = "SELECT * FROM 'review' WHERE `houseId` = '$houseId';";
$order = mysqli_query($db, $sql);
$row = mysqli_fetch_array($order, MYSQLI_ASSOC);
?>
