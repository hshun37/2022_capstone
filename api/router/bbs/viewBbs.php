<?php
include("../../api/db.php");
$bbsId = $_GET['id'];
$updateView = "UPDATE `board` set view = view + 1 where `bbsId` = '$bbsId'";
$updateOrder = mysqli_query($db, $updateView);
$sql = "SELECT * FROM `board` where bbsId = $bbsId";
$order = mysqli_query($db, $sql);
$row = mysqli_fetch_array($order, MYSQLI_ASSOC);
?>
