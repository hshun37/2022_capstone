<?php
include("../../api/db.php");
$houseId = $_GET['houseId'];
$sql = "SELECT * FROM `house`, `location` WHERE `houseId` = `id` AND `houseId` = '$houseId';";
$order = mysqli_query($db, $sql);
$row = mysqli_fetch_array($order, MYSQLI_ASSOC);
?>
